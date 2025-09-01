
function responseError(event){
  const xhr = event.detail.xhr;

  if(xhr.status === 422){
    return;
  }

  if(xhr.status !== 200){
    const tasksBox = document.querySelector('#tasks-box');
    tasksBox.innerHTML = '<p class="text-white bg-red-600 p-2 text-center rounded">❌ Sinto muito, ocorreu um erro inesperado.</p>'
  }
}


document.addEventListener('DOMContentLoaded', () => {
  if(!document.htmxActions) document.htmxActions = {};
  document.htmxActions.responseError = responseError;
});