<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subjects extends Component
{

    public $classes_id, $subject_name;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.subjects.subjects');
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
        $this->subjects_details = '';
    }

    public function store()
    {
        $this->validate([
            'classes_id' => 'required',
            'subject_name' => 'required',
        ]);
        Subjects::updateOrCreate(['id' => $this->subjects_id], [
            'classes_id' => $this->subjects_details,
            'subject_name' => $this->subjects_details,
        ]);
        session()->flash(
            'message',
            $this->subjects_id ? 'Subjects Updated Successfully!' : 'Subjects Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Subjects = Subjects::findOrFail($id);
        $this->classes_id = $id;
        $this->subject_name = $Subjects->subject_name;
        $this->openModal();
    }

    public function delete($id)
    {
        Subjects::find($id)->delete();
        session()->flash('message', 'Subjects Deleted Successfully.');
    }
}
