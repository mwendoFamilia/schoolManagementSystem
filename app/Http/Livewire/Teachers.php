<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Livewire\Component;

class Teachers extends Component
{
    public $teachers,
        $classes_id,
        $school_id,
        $gender,
        $first_name,
        $middle_name,
        $last_name,
        $leader_id,
        $other_teacher_details;
    public $isOpen = 0;

    public function render()
    {
        $this->teachers = Teacher::all();
        return view('livewire.teachers.teachers');
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
        $this->school_id = '';
        $this->gender = '';
        $this->first_name = '';
        $this->middle_name = '';
        $this->last_name = '';
        $this->leader_id = '';
        $this->other_teacher_details = '';
    }

    public function store()
    {
        $this->validate([
            'classes_id,' => 'required',
            'school_id,' => 'required',
            'gender,' => 'required',
            'first_name,' => 'required',
            'middle_name,' => 'required',
            'last_name,' => 'required',
            'leader_id,' => 'required',
            'other_teacher_details,' => 'required',

        ]);
        Teacher::updateOrCreate(['id' => $this->teacher_id], [
            'classes_id' => $this->classes_id,
            'school_id' => $this->school_id,
            'gender' => $this->gender,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'leader_id' => $this->leader_id,
            'other_teacher_details' => $this->other_teacher_details,
        ]);
        session()->flash(
            'message',
            $this->teacher_id ? 'Teacher Updated Successfully!' : 'Teacher Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Teacher = Teacher::findOrFail($id);
        $this->teacher_id = $id;
        $this->classes_id = $Teacher->classes_id;
        $this->school_id = $Teacher->school_id;
        $this->gender = $Teacher->gender;
        $this->first_name = $Teacher->first_name;
        $this->middle_name = $Teacher->middle_name;
        $this->last_name = $Teacher->last_name;
        $this->leader_id = $Teacher->leader_id;
        $this->other_teacher_details = $Teacher->other_teacher_details;


        $this->openModal();
    }

    public function delete($id)
    {
        Teacher::find($id)->delete();
        session()->flash('message', 'TeacherDeleted Successfully.');
    }
}
