<x-app-layout>
    <div class="container mx-auto">
        <div class="max-w-screen-md mx-auto"> 
            <h1 class="text-3xl font-bold mb-4">Tasks for {{ $date }}</h1>

            <div class="flex justify-between items-center mt-10">
                <!-- Date Picker -->
                <form action="{{ route('tasks.index') }}" method="GET">
                    <label for="datepicker">Select Date:</label>
                    <input type="date" id="datepicker" name="date" value="{{ $date }}">
                    <button type="submit">Go</button>
                </form>

                <!-- "Create New Task" button -->
                <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-black px-4 py-2 mr-9 rounded hover:bg-blue-600">Create New Task</a>
            </div>

            <!-- Task Table -->
            <div class="mt-5">
                <table class="table-auto border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-gray-200 border border-gray-400">Title</th>
                            <th class="px-4 py-2 bg-gray-200 border border-gray-400">Description</th>
                            <th class="px-4 py-2 bg-gray-200 border border-gray-400">Due Date</th>
                            <th class="px-4 py-2 bg-gray-200 border border-gray-400">Actions</th>
                            <th class="px-4 py-2 bg-gray-200 border border-gray-400">Is Done</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="px-4 py-2 border border-gray-400">{{ $task->title }}</td>
                                <td class="px-4 py-2 border border-gray-400">{{ $task->description }}</td>
                                <td class="px-4 py-2 border border-gray-400">{{ $task->due_date}}</td>
                                <td class="px-4 py-2 border border-gray-400">
                                    <a href="{{ route('tasks.show', $task) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</a>
                                    <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                                    </form>
                                </td>
                                <td class="px-4 py-2 border border-gray-400">
                                    <input type="checkbox" {{ $task->is_done ? 'checked' : '' }} disabled>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
