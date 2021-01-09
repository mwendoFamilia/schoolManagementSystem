<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fee;


class Fees extends Component
{

    public $classes_id, $term_id, $amount;
    public $isOpen = 0;

    public function render()
    {
        $this->exams = Fee::all();
        return view('livewire.fees.fees');
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
        $this->term_id = '';
        $this->amount = '';
    }

    public function store()
    {
        $this->validate([
            'classes_id' => 'required',
            'term_id' => 'required',
            'amount' => 'required',
        ]);
        Fee::updateOrCreate(['id' => $this->fees_id], [
            'classes_id' => $this->classes_id,
            'term_id' => $this->term_id,
            'amount' => $this->amount,
        ]);
        session()->flash(
            'message',
            $this->fees_id ? 'Fee Updated Successfully!' : ' Fee Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Fee = Fee::findOrFail($id);
        $this->fees_id = $id;
        $this->classes_id = $Fee->classes_id;
        $this->term_id = $Fee->term_id;
        $this->amount = $Fee->amount;
        
        $this->openModal();
    }



    public function delete($id)
    {
        Fee::find($id)->delete();
        session()->flash('message', 'ExamDeleted Successfully.');
    }
}
