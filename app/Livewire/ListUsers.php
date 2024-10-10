<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    public function render()
    {
        return view('livewire.list-users',[
            'users' => User::all()
        ]);
    }
}
