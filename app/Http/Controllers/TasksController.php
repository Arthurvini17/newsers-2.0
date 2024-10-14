<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function tasks_show(Tasks $tasks){
        return view('tasks.show', ['tasks' => $tasks]);
    }
    public function index(){
        return view('tasks.index');
    }

    public function tasks_delete(Tasks $tasks){
        $tasks->delete();
        return redirect()->route('index');
    }


    public function tasks_edit(Tasks $tasks) {
        return view('tasks.edit', ['tasks' => $tasks]); 
    }
    

    public function tasks_update(Tasks $tasks, Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        $tasks->update($validatedData);

        return redirect()->route('index');

        }
    }
