<form
  hx-put="{{ route('task.update', $task) }}"
  hx-headers='{"X-CSRF-TOKEN":"{{ csrf_token() }}", "Accept":"application/json"}'
  hx-target="#task-{{ $task->id }}"
  hx-swap="outerHTML"
  hx-on::response-error="document.htmxActions.errorUpdateTask(event,{{ $task->id }})"
>
  <span id="error_edit" class="text-red-500 text-xs italic"></span>
  <input type="text" name="title" value="{{ $task->title }}" class="border-1 border-black-300 rounded p-1">
  <button type="submit" class="bg-green-700 hover:bg-green-400 p-2 text-xs rounded cursor-pointer text-white">Salvar</button>
  <button
  hx-get="{{ route('task.cancel',$task) }}"
  hx-target="#task-{{ $task->id }}"
  hx-swap="outerHTML"
  class="bg-red-700 hover:bg-red-400 p-2 text-xs rounded cursor-pointer text-white">Cancelar</button>
</form>