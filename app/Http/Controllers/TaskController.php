<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Head page

    public function index()
    {
        $user = User::find(Auth::user()->id);
        $task = $user->tasks;

        return view('home')->with([
            "task" => $task,
            "script" => ["task"]
        ]);
    }

    // Add task

    public function taskAddHandler(Request $request)
    {
        $task = new Task();
        $task->name = $request->task;
        $task->user_id = Auth::id();
        $task->save();
        return redirect('/task');

    }

    // Remove task

    public function taskDeleteHandler($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    // Edit task

    public function taskEdit($id)
    {
        //dd($id);
        $task = Task::where('id',$id)->first();
        return view("edit",["task"=>$task]);

    }

    public function taskEditHandler(Request $request)
    {
        $task = Task::find($request->id);
        $task->name = $request->task;
        $task->save();
        return redirect('/');

    }
}
