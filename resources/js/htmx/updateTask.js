function errorUpdateTask(event, taskId){
  const xhr = event.detail.xhr;

  if(xhr.status === 422){
    const liElement = document.querySelector('#task-'+taskId);
    const errorelement = liElement.querySelector('#error_edit');
    const message = JSON.parse(xhr.response).message;
    errorelement.innerHTML = message;
  }
}

document.addEventListener('DOMContentLoaded', () => {
  if(!document.htmxActions) document.htmxActions = {};
  document.htmxActions.errorUpdateTask = errorUpdateTask;
});