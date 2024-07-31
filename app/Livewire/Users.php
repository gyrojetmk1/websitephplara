<?php

namespace App\Livewire;

use Livewire\Component;

class Users extends Component
{
    public $username;
    public $email;
    public $password;


    public function render()
    {
        return view('livewire.users');
    }
}
