@extends('layout')

@section('content')
<div
  class="max-w-2xl mx-auto p-6 bg-white rounded-md shadow border-1 border-gray-200"
  hx-on::response-error="document.htmxActions.responseError(event)"
  hx-on::before-request="document.htmxActions.loadingCountTasks('#count-tasks')"
  hx-on::after-request="document.htmxActions.countTasks('#count-tasks')"
>
    <h1 class="text-2xl font-bold mb-4">📋 Lista de Tarefas</h1>
    <x-add_task />
    <x-tasks />
</div>


@push('js')
@vite([
  'resources/js/htmx/addTask.js',
  'resources/js/htmx/deleteTask.js',
  'resources/js/htmx/updateTask.js',
  'resources/js/htmx/responseError.js',
  'resources/js/htmx/countTasks.js',
])
@endpush


@endsection
