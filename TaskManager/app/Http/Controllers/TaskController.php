<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\TaskStoreRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $date = $request->input('date', Carbon::today()->toDateString());
        $tasks = Task::where('user_id', $request->user()->id)
                     ->whereDate('due_date', $date)
                     ->orderBy('due_date', 'asc')
                     ->paginate(10);
        return view('tasks.index', compact('tasks', 'date'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;
        $createdTask = Task::create($data);

        return to_route('tasks.index', $createdTask)->with('success', 'Task created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskStoreRequest $request, Task $task)
    {
        $data = $request->validated();
        $task->update($data);
        return to_route('tasks.index', $task)->with('success', 'Task updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return to_route('tasks.index')->with('success', 'Task deleted succesfully');
    }
}
