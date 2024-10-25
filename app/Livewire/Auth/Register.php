<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;

    ##validações 
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Esse campo tem que ser preenchido',
            'email.required' => 'O campo de email é obrigatório',
            'email.email' => 'Esse campo tem que ser um email válido',
            'email.unique' => 'Esse email já está em uso',
            'password.required' => 'Esse campo tem que ser preenchido',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres',
        ];
    }

    public function user_create()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        return redirect()->route('index');
    }

  
    public function render()
    {
        return view('livewire.auth.register');
    }
}