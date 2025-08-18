<h2 class="text-xl font-semibold mb-4 text-gray-700">Tarefas</h2>
<div class="bg-white shadow-lg rounded-lg p-4" hx-get="{{ route('tasks.index') }}" hx-trigger="load">
    <p class="text-gray-500 text-center">Loading Tasks</p>
</div>