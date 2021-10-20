<?php

namespace App\Http\Livewire\Backend\Apps\User;

use Livewire\Component;

class UserForm extends Component
{
    public function render()
    {
        return view('livewire.backend.apps.user.user-form')->extends('layout.default')->section('content');
    }
}
