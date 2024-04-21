<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::get('/skills', [TaskController::class, 'index']);
// Route::post('/skills', [TaskController::class, 'store']);
// Route::post('/skills/{skill}', [TaskController::class, 'update']);


Route::apiResource('tasks', TaskController::class);
