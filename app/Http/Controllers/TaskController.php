<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $tasks = Task::latest()->get();

    return view('partials._tasks', compact('tasks'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  public function cancel(Task $task)
  {
    return view('partials._single_task', compact('task'));
  }

  public function done(Task $task)
  {
    $task->done = request()->has('done');
    $task->save();

    return view('partials._single_task', compact('task'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = request()->validate([
      'title' => 'required|min:3'
    ]);

    $task = Task::create([
      'title' => $validated['title']
    ]);

    return view('partials._single_task', compact('task'));
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Task $task)
  {
    return view('partials._form_edit_task', compact('task'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Task $task)
  {
    $validated = $request->validate([
      'title' => 'required|min:3'
    ]);

    $task->update($validated);

    return view('partials._single_task', compact('task'));
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Task $task)
  {
    $task->delete();

    return response()->noContent();
  }
}
