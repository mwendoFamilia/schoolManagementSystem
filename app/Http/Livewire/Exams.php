<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use Livewire\Component;

class Exams extends Component
{
    public $exams, $classes_id, $Subject_id, $exam_code, $exam_name, $other_exam_details;
    public $isOpen = 0;

    public function render()
    {
        $this->exams = Exam::all();
        return view('livewire.exams.exams');
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
        $this->classes_id = '';
        $this->Subject_id = '';
        $this->exam_code = '';
        $this->exam_name = '';
        $this->other_exam_details = '';
    }

    public function store()
    {
        $this->validate([
            'classes_id' => 'required',
            'Subject_id' => 'required',
            'exam_code' => 'required',
            'exam_name' => 'required',
            'other_exam_details' => 'required',
        ]);
        Exam::updateOrCreate(['id' => $this->exam_id], [
            'classes_id' => $this->classes_id,
            'Subject_id' => $this->Subject_id,
            'exam_code' => $this->exam_code,
            'exam_name' => $this->exam_name,
            'other_exam_details' => $this->other_exam_details
        ]);
        session()->flash(
            'message',
            $this->exam_id ? 'Exam Updated Successfully!' : 'Exam Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Exam = Exam::findOrFail($id);
        $this->exam_id = $id;
        $this->classes_id = $Exam->classes_id;
        $this->Subject_id = $Exam->Subject_id;
        $this->exam_code = $Exam->exam_code;
        $this->exam_name = $Exam->exam_name;
        $this->other_exam_details = $Exam->other_exam_details;
        $this->openModal();
    }



    public function delete($id)
    {
        Exam::find($id)->delete();
        session()->flash('message', 'ExamDeleted Successfully.');
    }
}
