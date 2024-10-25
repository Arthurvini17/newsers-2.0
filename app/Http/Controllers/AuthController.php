<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index_login(){
        return view('auth.login');
    }


    public function index_register(){
        return view('auth.register');
    }
  

}
