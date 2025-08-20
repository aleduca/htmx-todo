<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/task/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::get('/task/cancel/{task}', [TaskController::class, 'cancel'])->name('task.cancel');
Route::post('/task', [TaskController::class, 'store'])->name('task.store');
Route::delete('/task/{task}', [TaskController::class, 'destroy'])->name('task.delete');
