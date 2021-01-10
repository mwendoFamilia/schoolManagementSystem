<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Reports extends Component
{
    public $users,
        $name,
        $email,
        $email_verified_at,
        $password,
        $two_factor_secret,
        $two_factor_recovery_codes,
        $remember_token,
        $current_team_id,
        $profile_photo_path,
        $created_at;

    public $isOpen = 0;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.users.users');
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
        $this->name = '';
        $this->Subject_id = '';
        $this->email = '';
        $this->two_factor_recovery_codes = '';
        $this->remember_token = '';
        $this->current_team_id = '';
        $this->profile_photo_path = '';
        $this->email_verified_at = '';
        $this->password = '';
        $this->created_at = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'Subject_id' => 'required',
            'email' => 'required',
            'two_factor_recovery_codes' => 'required',
            'remember_token' => 'required',
            'current_team_id' => 'required',
            'profile_photo_path' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required',
            'created_at' => 'required',
        ]);
        User::updateOrCreate(['id' => $this->report_id], [
            'name' => $this->name,
            'Subject_id' => $this->Subject_id,
            'email' => $this->email,
            'two_factor_recovery_codes' => $this->two_factor_recovery_codes,
            'remember_token' => $this->remember_token,
            'current_team_id' => $this->current_team_id,
            'profile_photo_path' => $this->profile_photo_path,
            'email_verified_at' => $this->email_verified_at,
            'password' => $this->password,
            'created_at' => $this->created_at,
        ]);
        session()->flash(
            'message',
            $this->report_id ? 'User Updated Successfully!' : 'User Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $User = User::findOrFail($id);
        $this->report_id = $id;
        $this->name = $User->name;
        $this->Subject_id = $User->Subject_id;
        $this->email = $User->email;
        $this->two_factor_recovery_codes = $User->two_factor_recovery_codes;
        $this->remember_token = $User->remember_token;
        $this->current_team_id = $User->current_team_id;
        $this->profile_photo_path = $User->profile_photo_path;
        $this->email_verified_at = $User->email_verified_at;
        $this->password = $User->password;
        $this->created_at = $User->created_at;
        $this->openModal();
    }
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }
}
