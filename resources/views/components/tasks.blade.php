<h2 class="text-xl font-semibold mb-4 text-gray-700">Tarefas (<span id="count-tasks"></span>)</h2>
<div
class="bg-white shadow-lg rounded-lg p-4 count"
  id='tasks-box'
  hx-get="{{ route('tasks.index') }}"
  hx-trigger="load delay:1ms">
    <p class="text-gray-500 text-center">Loading Tasks</p>
</div>