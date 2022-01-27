<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){


        return view('welcome', ['tasks' => Task::all()]);

    }

    public function addTask(Request $request){
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }


    public function setCompleted($id){
        $task = Task::find($id);
        $task->is_completed = 1;
        $task->save();
        return redirect('/');
    }

    public function deleteTask($id){
        $task = Task::find($id);
        $task->delete();
        return redirect('/');
    }


}
