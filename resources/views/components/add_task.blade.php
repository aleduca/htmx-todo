<div class="w-full text-red-600 italic text-xs" id="error_add_task"></div>
 <form
  class="flex gap-2 mb-4"
  hx-post="{{ route('task.store') }}"
  hx-target="#tasks-list"
  hx-swap="afterbegin"
  hx-headers='{"X-CSRF-TOKEN":"{{ csrf_token() }}", "Accept":"application/json"}'
  hx-on::after-request="document.htmxActions.afterAddTask(this,'#tasks-list',event)"
  hx-on::response-error="document.htmxActions.errorAddTask(event)"
 >
  <input
      type="text"
      name="title"
      placeholder="Digite a tarefa..."
      class="flex-1 border rounded p-2"
      required
  >
  <button
      type="submit"
      class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded cursor-pointer"
  >
    <x-button-loading text="Adicionar" />
  </button>
</form>