<?php

namespace App\Http\Livewire\Backend\Apps\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    protected $listeners = ['delete' => 'destroy'];

    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.backend.apps.user.user-list', compact('users'))->extends('layout.default')->section('content');
    }

    public function destroy($id)
    {

        User::find($id)->delete();
        
        $this->alert('success', 'Registro excluído com sucesso!');

    }



}
