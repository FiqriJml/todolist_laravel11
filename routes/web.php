<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('tasks.index');
// });

Route::resource('/', TaskController::class)->only('index');
