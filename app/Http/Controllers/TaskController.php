<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::paginate(3);
        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:10',
            'description' => 'required|min:10'
        ]);
        $task = new Task;
        $task->create($request->all());
        Session::flash('flash_message', "Task Created Successfully");
        return redirect('tasks');
    }

    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $this->validate($request, [
            'title' => 'required|min:10',
            'description' => 'required|min:10'
        ]);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        session()->flash('flash_message', "Task Update Successfully");
        return redirect('tasks');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        session()->flash('flash_message', "Task Deleted Successfully");
        return redirect('tasks');
    }
}
