<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index_login()
    {
        return view('auth.login');
    }


    public function auth_user(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt([$credentials]))
        {
            $request->session()->regenerate();

            return redirect()->route('index');
        }


        return back()->withErrors([
            'email' => 'email deu erro'
        ]);
    }


    public function index_register()
    {
        return view('auth.register');
    }

    public function user_register(Request $request, User $user)
    {
        $user = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
        ], [

            'name.required' => 'Esse campo deve ser preenchido',
            'email.required' => 'Esse campo deve ser preenchido',
            'email.unique' => 'Esse email ja existe',
            'password.required' => 'Esse campo deve ser preenchido',
        ]);

        if ($user) {
            return redirect()->route('index');
        }
    }
}
