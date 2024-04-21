<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Create New Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="3" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
            </div>
            <div class="mb-4">
                <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
                <input type="date" id="due_date" name="due_date" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <input type="checkbox" id="is_done" name="is_done" class="form-checkbox h-5 w-5 text-blue-600 border-gray-300 rounded focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                <label for="is_done" class="ml-2 block text-sm text-gray-900">Is Done</label>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Task</button>
        </form>
    </div>
</x-app-layout>
