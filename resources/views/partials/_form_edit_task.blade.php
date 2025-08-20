<form>
  <input type="text" value="{{ $task->title }}" class="border-1 border-black-300 rounded p-1">
  <button class="bg-green-700 hover:bg-green-400 p-2 text-xs rounded cursor-pointer text-white">Salvar</button>
  <button
  hx-get="{{ route('task.cancel',$task) }}"
  hx-target="#task-{{ $task->id }}"
  hx-swap="outerHTML"
  class="bg-red-700 hover:bg-red-400 p-2 text-xs rounded cursor-pointer text-white">Cancelar</button>
</form>