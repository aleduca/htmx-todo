<ul class="space-y-2" id="tasks-list">
  @forelse ($tasks as $task)
    @include('partials._single_task')
  @empty
    <li class="text-gray-500 text-center" id="none-task">Nenhuma tarefa encontrada.</li>
  @endforelse
</ul>