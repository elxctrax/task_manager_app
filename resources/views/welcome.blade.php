<x-layout title="Welcome">

    @section('content')
    <div class="container">
        <h2>New Task</h2>

        <!-- Task Create Form -->
        <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Task Title" required>
            </div>
            <div class="form-group mt-2">
                <textarea name="description" class="form-control" placeholder="Task Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Task</button>
        </form>

    <h2>All Tasks</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Example Task</td>
                <td><span class="badge bg-secondary">Pending</span></td>
            </tr>
        </tbody>
    </table>

</x-layout>