<ul class="space-y-2" id="tasks-list">
  @forelse ($tasks as $task)
    <li class="p-2 bg-gray-50 rounded-lg flex justify-between items-center hover:bg-gray-100 transition">
      <div>
        {{ $task->title }}
      </div>
      <div>
        <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 transition cursor-pointer">📝</button>
        <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition cursor-pointer">🗑</button>
      </div>
    </li>
  @empty
    <li class="text-gray-500 text-center">Nenhuma tarefa encontrada.</li>
  @endforelse
</ul>