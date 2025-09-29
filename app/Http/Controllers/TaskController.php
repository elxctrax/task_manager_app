<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at','desc')->get();
        return view('welcome', compact('tasks'));
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            //'status' => 'required|boolean',
        ]);

        Task::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'is_completed' => false,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $task->update([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'is_completed' => (bool) $data['status'],
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted.');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }
}
