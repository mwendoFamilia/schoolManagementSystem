<?php

namespace App\Http\Livewire;

use App\Models\Homework;
use Livewire\Component;

class Homeworks extends Component
{
    public $homeworks, $student_id, $subject_id, $homework_content, $grade, $other_homework_details;
    public $isOpen = 0;

    public function render()
    {
        $this->homeworks = Homework::all();
        return view('livewire.homeworks.homeworks');
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
        $this->homework_content = '';
        $this->grade = '';
        $this->other_homework_details = '';
    }

    public function store()
    {
        $this->validate([
            'student_id' => 'required',
            'Subject_id' => 'required',
            'homework_content' => 'required',
            'grade' => 'required',
            'other_homework_details' => 'required',
        ]);
        Homework::updateOrCreate(['id' => $this->homework_id], [
            'student_id' => $this->student_id,
            'Subject_id' => $this->Subject_id,
            'homework_content' => $this->homework_content,
            'grade' => $this->grade,
            'other_homework_details' => $this->other_homework_details
        ]);
        session()->flash(
            'message',
            $this->homework_id ? 'Homework Updated Successfully!' : 'Homework Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Homework = Homework::findOrFail($id);
        $this->homework_id = $id;
        $this->student_id = $Homework->student_id;
        $this->Subject_id = $Homework->Subject_id;
        $this->homework_content = $Homework->homework_content;
        $this->grade = $Homework->grade;
        $this->other_homework_details = $Homework->other_homework_details;
        $this->openModal();
    }



    public function delete($id)
    {
        Homework::find($id)->delete();
        session()->flash('message', 'Homework Deleted Successfully.');
    }
}
