<?php

use App\Http\Controllers\Tasks;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('/tasks_show/{tasks}', [TasksController::class, 'tasks_show'])->name('tasks_show');
Route::get('/tasks/{tasks}/edit', [TasksController::class, 'tasks_edit'])->name('tasks_edit');
Route::put('/tasks{tasks}' , [TasksController::class, 'tasks_update'])->name('tasks_update');
Route::delete('/tasks{tasks}', [TasksController::class, 'tasks_delete'])->name('tasks_delete');

