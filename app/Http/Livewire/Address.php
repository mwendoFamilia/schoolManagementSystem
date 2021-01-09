<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Address extends Component
{

    public $address, $address_details;

    public $isOpen = 0;

    public function render()
    {
        return view('livewire.address.address');
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
        $this->address_details = '';
    }

    public function store()
    {
        $this->validate([
            'address_details' => 'required',
        ]);
        Address::updateOrCreate(['id' => $this->address_id], [
            'address_details' => $this->address_details,
        ]);
        session()->flash(
            'address_details',
            $this->address_id ? 'Address Updated Successfully!' : 'Address Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Address = Address::findOrFail($id);
        $this->address_id = $id;
        $this->address_details = $Address->address_details;
        $this->openModal();
    }

    public function delete($id)
    {
        Address::find($id)->delete();
        session()->flash('message', 'Address Deleted Successfully.');
    }
}
