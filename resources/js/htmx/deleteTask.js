function deleteTask(idTask, elementTasks, event){
  const xhr = event.detail.xhr;

  if(xhr.status === 204){
    const taskRow = document.querySelector('#task-'+idTask);
    taskRow.remove();

    const liElements = document.querySelectorAll(`${elementTasks} li`);
    const tasks = document.querySelector(`${elementTasks}`);
    if(!liElements.length){
      tasks.innerHTML = '<li class="text-gray-500 text-center" id="none-task">Nenhuma tarefa encontrada.</li>';
    }
  }
}

function confirmDeleteTask(event){
    if (!event.detail.question) return

    // // This will prevent the request from being issued to later manually issue it
    event.preventDefault()

    Swal.fire({
      title: "Tem certeza?",
      text: event.detail.question,
      icon:'question',
      showCancelButton: true,
      cancelButtonText: 'Não, tá doido?',
      confirmButtonText:'Sim, manda ver!!'
    }).then(function(result) {
      if (result.isConfirmed) {
        // If the user confirms, we manually issue the request
        event.detail.issueRequest(true); // true to skip the built-in window.confirm()
      }
    })
}

document.addEventListener('DOMContentLoaded', () => {
  if(!document.htmxActions) document.htmxActions = {};
  document.htmxActions.confirmDeleteTask = confirmDeleteTask;
  document.htmxActions.deleteTask = deleteTask;
});