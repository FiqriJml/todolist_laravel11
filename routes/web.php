<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('tasks.index');
// });

Route::resource('/tasks', TaskController::class);

Route::put('/tasks/{task}', [TaskController::class, 'is_completed'])->name('tasks.is_completed');
