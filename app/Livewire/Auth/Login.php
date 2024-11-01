<?php

namespace App\Livewire\Auth;

use Illuminate\Container\Attributes\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;

    public $password; 


    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login_user(){
    
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect()->intended('/index');
         }
         else {
            $this->addError('email', 'invalid email or password');
         }
    }
}
