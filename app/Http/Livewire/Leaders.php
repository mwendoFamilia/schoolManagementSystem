<?php

namespace App\Http\Livewire;

use App\Models\Leader;
use Livewire\Component;

class Leaders extends Component
{
    public $leaders, $learship_name, $learship_details;
    public $isOpen = 0;

    public function render()
    {
        $this->leader = Leader::all();
        return view('livewire.leaders.leaders');
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
        $this->learship_name = '';
        $this->Learlearship_details = '';
    }

    public function store()
    {
        $this->validate([
            'learship_name' => 'required',
            'Learlearship_details' => 'required',

        ]);
        Leader::updateOrCreate(['id' => $this->leader_id], [
            'learship_name' => $this->learship_name,
            'Learlearship_details' => $this->Learlearship_details,

        ]);
        session()->flash(
            'message',
            $this->leader_id ? 'Leader Updated Successfully!' : 'Leader Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Leader = Leader::findOrFail($id);
        $this->leader_id = $id;
        $this->learship_name = $Leader->learship_name;
        $this->Learlearship_details = $Leader->Learlearship_details;
        $this->openModal();
    }



    public function delete($id)
    {
        Leader::find($id)->delete();
        session()->flash('message', 'Leader Deleted Successfully.');
    }
}
