<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    public function index_login()
    {
        return view('auth.login');
    }


    public function auth_user(Request $request)
    {
        // Valida os dados de entrada
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'teste',
            'password.required' => 'teste',
        ]);
    
        if (FacadesAuth::attempt($credentials)) {
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
        $userData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
        ], [

            'name.required' => 'Esse campo deve ser preenchido',
            'email.required' => 'Esse campo deve ser preenchido',
            'email.unique' => 'Esse email ja existe',
            'password.required' => 'Esse campo deve ser preenchido',
        ]);


        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => bcrypt($userData['password']),
        ]);

        if ($user) {
            return redirect()->route('index');
        }
    }
}
