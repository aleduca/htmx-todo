function afterAddTask(form, element, event){
  form.reset();
}

function errorAddTask(event){
  const xhr = event.detail.xhr;

  if(xhr.status === 422){
    const errorElement = document.querySelector('#error_add_task');
    const message = JSON.parse(xhr.response).message;
    errorElement.innerHTML = message;
  }
}

document.addEventListener('DOMContentLoaded', () => {
  if(!document.htmxActions) document.htmxActions = {};
  document.htmxActions.errorAddTask = errorAddTask;
  document.htmxActions.afterAddTask = afterAddTask;
});