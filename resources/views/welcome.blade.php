<x-layout title="Welcome">
    @vite('resources/css/app.css')
    @section('content')
    <div class="container">
        <h2>New Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
            @csrf
            <input type="text" name="title" class="form-control mb-2" placeholder="Task Title" required>
            <textarea name="description" class="form-control mb-2" placeholder="Task Description"></textarea>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>


    <h2>All Tasks</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Task</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        @if($task->is_completed)
                            <span class="badge bg-success">Completed</span>
                        @else
                            <span class="badge bg-secondary">Pending</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $tasks->links('pagination::bootstrap-4') }}
    </div>


</x-layout>