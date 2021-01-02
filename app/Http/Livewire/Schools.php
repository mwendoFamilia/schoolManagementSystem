<?php

namespace App\Http\Livewire;

use App\Models\School;
use Livewire\Component;

use phpDocumentor\Reflection\Types\This;

class Schools extends Component
{
    public $schools, $school_id, $address_id, $School_name, $school_principal, $other_school_details, $created_at, $updated_at;
    public $isOpen = 0;

    public function render()
    {
        $this->schools = School::all();
        return view('livewire.schools.schools');
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
        $this->school_id = '';
        $this->address_id = '';
        $this->School_name = '';
        $this->school_principal = '';
        $this->other_school_details = '';
    }

    public function store()
    {
        $this->validate([
            'address_id' => 'required',
            'School_name' => 'required',
            'school_principal' => 'required',
            'other_school_details' => 'required'
        ]);
        School::updateOrCreate(['id' => $this->school_id], [
            'address_id' => $this->address_id,
            'School_name' => $this->School_name,
            'school_principal' => $this->school_principal,
            'other_school_details' => $this->other_school_details,
        ]);
        session()->flash('message', $this->school_id ? 'School Updated successfully' : 'School creted Successfuly!');
        $this->closeModal();
        $this->resetInputfields();
    }

    public function edit($id)
    {
        $Schools = School::findOrFail($id);
        $this->school_id = $id;
        $this->School_name = $Schools->School_name;
        $this->school_principal = $Schools->school_principal;
        $this->other_school_details = $Schools->other_school_details;

        $this->openModal();
    }

    public function delete($id)
    {
        School::find($id)->delete();
        session()->flash('message', 'School deleted Successfully!');
    }
}
