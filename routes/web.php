<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('/tasks', function () {
  return '<span>teste</span>';
})->name('tasks.index');
