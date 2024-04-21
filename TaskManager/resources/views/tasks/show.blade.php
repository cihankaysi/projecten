<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">{{ $task->title }}</h1>
        <p class="mt-2"><strong>Description:</strong> {{ $task->description }}</p>
        <p class="mt-2"><strong>Due Date:</strong> {{ $task->due_date }}</p>
        <p class="mt-2"><strong>Is Done:</strong> {{ $task->is_done ? 'Yes' : 'No' }}</p>
        <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mt-4">Back to Tasks</a>
    </div>
</x-app-layout>
