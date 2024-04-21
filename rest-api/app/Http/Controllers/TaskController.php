<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        return TaskResource::collection(Task::all());
    }

    public function show(Task $task){
        return new TaskResource($task);
    }

    public function store(StoreTaskRequest $request){
        Task::create($request->validated());
        return response()->json("Task created");
    }

    public function update(StoreTaskRequest $request, Task $task){
        $task->update($request->validated());
        return response()->json("Task updated");
    }

    public function destroy(Task $task){
        $task->destroy($task->id);
        return response()->json("Task deleted");
    }

}
