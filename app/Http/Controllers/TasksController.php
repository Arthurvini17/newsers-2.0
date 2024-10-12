<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function tasks_show(Tasks $tasks){
        return view('tasks.show', ['tasks' => $tasks]);
    }
    public function index(){
        return view('tasks.index');
    }
}
