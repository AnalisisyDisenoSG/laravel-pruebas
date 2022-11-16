<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

       return view('task.index',[
        'tasks' => $tasks
       ]);
    }
    
    public function edit(Task $task)
    {
      return view('tasks.edit', [
        'task' => $task
      ]);
    }
}
