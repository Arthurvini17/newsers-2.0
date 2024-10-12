<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function users_show(User $user){
        return view('users.show', ['user' => $user]);
    }
    public function index(){
        return view('users.index');
    }
}
