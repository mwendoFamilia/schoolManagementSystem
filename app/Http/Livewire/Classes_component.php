<?php

namespace App\Http\Livewire;

use App\Models\Classes;
use Livewire\Component;


class Classes_Component extends Component
{
    public $classes, $class_id, $class_code, $class_name, $other_classes_details, $teacher_id;
    public $isOpen = 0;

    public function render()

    {
        $this->classes = Classes::all();
        return view('livewire.classes.classes');
    }

    public function create()
    {
        $this->resetInputfields();
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

    public function resetInputfields()
    {
        // $this->class_id = '';
        // $this->subject_id = '';
        $this->teacher_id = '';
        $this->class_code = '';
        $this->class_name = '';
    }

    public function store()
    {
        $this->validate([
            // 'subject_id' => 'required',
            'teacher_id' => 'required',
            'class_code' => 'required',
            'class_name' => 'required'
        ]);
        Classes::updateOrCreate(['id' => $this->class_id], [
            // 'subject_id' => $this->subject_id,
            'teacher_id' => $this->teacher_id,
            'class_code' => $this->class_code,
            'class_name' => $this->class_name,
        ]);
        session()->flash('message', $this->class_id ? 'Classes Updated successfully' : 'Classes creted Successfuly!');
        $this->closeModal();
        $this->resetInputfields();
    }

    public function edit($id)
    {
        $Classess = Classes::findOrFail($id);
        $this->class_id = $id;
        $this->Class_name = $Classess->Class_name;
        $this->class_code = $Classess->class_code;
        // $this->subject_id = $Classess->subject_id;

        $this->openModal();
    }

    public function delete($id)
    {
        Classes::find($id)->delete();
        session()->flash('message', 'Class deleted Successfully!');
    }
}
