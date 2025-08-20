@extends('layout')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-md shadow border-1 border-gray-200">
    <h1 class="text-2xl font-bold mb-4">📋 Lista de Tarefas</h1>
    <x-add_task />
    <x-tasks />
</div>


@push('js')
@vite([
  'resources/js/htmx/addTask.js',
  'resources/js/htmx/deleteTask.js'
])
@endpush


@endsection
