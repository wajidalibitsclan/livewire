<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.form');
    }

    public function submit(){
        $this->validate([
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $this->name,
            'email'=> $this->email,
            'password' => Hash::make($this->password)
        ]);

    }
}
