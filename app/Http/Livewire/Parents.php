<?php

namespace App\Http\Livewire;

use App\Models\Parent_;
use Livewire\Component;

class Parents extends Component
{
    // `gender``first_name``middle_name``last_name``otherparent_details`
    public $parents, $gender, $first_name, $middle_name, $last_name, $otherparent_details;
    public $isOpen = 0;
    public function render()
    {
        return view('livewire.parents.parents');
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
        $this->gender = '';
        $this->First_name = '';
        $this->middle_name = '';
        $this->last_name = '';
        $this->otherparent_details = '';
    }

    public function store()
    {
        $this->validate([
            'gender' => 'required',
            'First_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'otherparent_details' => 'required',
        ]);
        Parent_::updateOrCreate(['id' => $this->parent_id], [
            'gender' => $this->gender,
            'First_name' => $this->First_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'otherparent_details' => $this->otherparent_details
        ]);
        session()->flash(
            'message',
            $this->parent_id ? 'Parent Updated Successfully!' : 'Parent Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Parent = Parent_::findOrFail($id);
        $this->parent_id = $id;
        $this->gender = $Parent->gender;
        $this->First_name = $Parent->First_name;
        $this->middle_name = $Parent->middle_name;
        $this->last_name = $Parent->last_name;
        $this->otherparent_details = $Parent->otherparent_details;
        $this->openModal();
    }



    public function delete($id)
    {
        Parent_::find($id)->delete();
        session()->flash('message', 'Parent Deleted Successfully.');
    }
}
