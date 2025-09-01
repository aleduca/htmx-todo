<li class="p-2 bg-gray-50 rounded-lg flex justify-between items-center hover:bg-gray-100 transition" id="task-{{ $task->id }}">
  <div class="flex items-center {{ $task->done ? 'line-through' : '' }}">
    <input
      hx-put="{{ route('task.done', $task) }}"
      name="done"
      hx-target="#task-{{ $task->id }}"
      hx-swap="outerHTML"
      hx-headers='{"X-CSRF-TOKEN":"{{ csrf_token() }}"}'
      type="checkbox"
      class="w-4 h-4 mr-2" {{ $task->done ? 'checked' : '' }}
    >
    {{ $task->title }}
  </div>
  @if(!$task->done)
  <div>
    <button
    hx-get="{{ route('task.edit', $task) }}"
    hx-target="#task-{{ $task->id }}"
    class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 transition cursor-pointer">📝</button>
    <button
    hx-delete="{{ route('task.delete',$task) }}"
    hx-swap="none"
    hx-headers='{"X-CSRF-TOKEN":"{{ csrf_token() }}"}'
    hx-on::confirm="document.htmxActions.confirmDeleteTask(event)"
    hx-on::after-request="document.htmxActions.deleteTask({{ $task->id }},'#tasks-list',event)"
    hx-confirm="Tem certeza que quer deletar essa tarefa?"
    class="count bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition cursor-pointer"
    >🗑</button>
  </div>
  @endif
</li>