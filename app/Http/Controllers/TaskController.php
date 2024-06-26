<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tasks = Task::all();
        return view("tasks.index", [
            "tasks" => Task::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tasks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // create a new task
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Task created succesfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task Updated Succsesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }

    public function is_completed(Task $task)
    {
        $task->update([
            'is_completed' => !$task->is_completed,
        ]);

        return redirect()->route('tasks.index');
    }
}
