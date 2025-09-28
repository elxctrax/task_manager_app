<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = tasks::orderBy('created_at','desc')->get();
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
            'status' => 'required|in:Completed,Pending',
        ]);

        tasks::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'is_complete' => $data['status'] === 'Completed',
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created.');
    }

    public function edit(tasks $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, tasks $task)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'status' => 'required|in:Completed,Pending',
        ]);

        $task->update([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'is_complete' => $data['status'] === 'Completed',
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated.');
    }

    public function destroy(tasks $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted.');
    }

    public function show(tasks $task)
    {
        return view('tasks.show', compact('task'));
    }
}
