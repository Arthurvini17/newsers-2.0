<?php

use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [UsersController::class, 'index'])->name('users.index');
Route::get('/user_show/{user}', [UsersController::class, 'users_show'])->name('users_show');
