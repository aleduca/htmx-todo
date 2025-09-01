function countTasks(elementTarget){
  const targetElement = document.querySelector(elementTarget);
  const tasks = document.querySelectorAll('#tasks-list li');
  targetElement.innerHTML = tasks.length;
}

function loadingCountTasks(elementTarget){
  document.querySelector(elementTarget).innerHTML = '⌛'
}

function stopCountingTasks(){
  const eventsToStop = ['before-request','after-request'];
  eventsToStop.forEach(eventName => {
    document.body.addEventListener('htmx:'+eventName, event => {
      const target = event.target;
      if(!target.classList.contains('count')){
        event.stopPropagation();
      }
    },true);
  })
}

document.addEventListener('DOMContentLoaded', () => {
  stopCountingTasks();

  if(!document.htmxActions) document.htmxActions = {};
  document.htmxActions.countTasks = countTasks;
  document.htmxActions.loadingCountTasks = loadingCountTasks;
});