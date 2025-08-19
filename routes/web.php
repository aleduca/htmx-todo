<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/task', [TaskController::class, 'store'])->name('task.store');
