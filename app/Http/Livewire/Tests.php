<?php

namespace App\Http\Livewire;

use App\Models\Test;
use Livewire\Component;

class Tests extends Component
{
    public $tests, $student_id, $Subject_id, $exam_id, $score, $grade;
    // `student_id``subject_id``exam_id``score``grade`
    public $isOpen = 0;

    public function render()
    {
        $this->tests = Test::all();
        return view('livewire.tests.tests');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->student_id = '';
        $this->Subject_id = '';
        $this->exam_id = '';
        $this->score = '';
        $this->grade = '';
    }

    public function store()
    {
        $this->validate([
            'student_id' => 'required',
            'Subject_id' => 'required',
            'exam_id' => 'required',
            'score' => 'required',
            'grade' => 'required',
        ]);
        Test::updateOrCreate(['id' => $this->exam_id], [
            'student_id' => $this->student_id,
            'Subject_id' => $this->Subject_id,
            'exam_id' => $this->exam_id,
            'score' => $this->score,
            'grade' => $this->grade
        ]);
        session()->flash(
            'message',
            $this->exam_id ? 'Test Updated Successfully!' : 'Test Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Test = Test::findOrFail($id);
        $this->exam_id = $id;
        $this->student_id = $Test->student_id;
        $this->Subject_id = $Test->Subject_id;
        $this->exam_id = $Test->exam_id;
        $this->score = $Test->score;
        $this->grade = $Test->grade;
        $this->openModal();
    }



    public function delete($id)
    {
        Test::find($id)->delete();
        session()->flash('message', 'Test Deleted Successfully.');
    }
}
