<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\registerCreateForm;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{

    public registerCreateForm $form;

    

    public function user_create()
    {
        $this->validate();


        User::Create(
            $this->form->all()
        );


        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
