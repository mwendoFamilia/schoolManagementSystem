<?php

namespace App\Http\Livewire;

use App\Models\Term;
use Livewire\Component;

class Terms extends Component
{
    public $terms,
        $term_code,
        $term_name,
        $year;

    public $isOpen = 0;

    public function render()
    {
        $this->terms = Term::all();
        return view('livewire.terms.terms');
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
        $this->term_code = '';
        $this->Year = '';
        $this->term_name = '';
    }

    public function store()
    {
        $this->validate([
            'term_code' => 'required',
            'Year' => 'required',
            'term_name' => 'required',
        ]);
        Term::updateOrCreate(['id' => $this->term_id], [
            'term_code' => $this->term_code,
            'Year' => $this->Year,
            'term_name' => $this->term_name,
        ]);
        session()->flash(
            'message',
            $this->term_id ? 'Term Updated Successfully!' : 'Term Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Term = Term::findOrFail($id);
        $this->term_id = $id;
        $this->term_code = $Term->term_code;
        $this->Year = $Term->Year;
        $this->term_name = $Term->term_name;
        $this->openModal();
    }
    public function delete($id)
    {
        Term::find($id)->delete();
        session()->flash('message', 'TermDeleted Successfully.');
    }
}
