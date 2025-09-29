<x-layout title="Edit Task">
    <div class="container">
        <h2>Edit Task</h2>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="mb-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
            </div>

            <div class="form-group mt-2">
                <textarea name="description" class="form-control">{{ $task->description }}</textarea>
            </div>

            <div class="form-group mt-2">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="0" {{ !$task->is_completed ? 'selected' : '' }}>Pending</option>
                    <option value="1" {{ $task->is_completed ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Task</button>
        </form>
    </div>
</x-layout>
