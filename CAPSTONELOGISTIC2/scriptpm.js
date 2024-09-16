// Task Management - Adding a new task
function addTask() {
    var taskInput = document.getElementById('new-task');
    var task = taskInput.value;
    if (task.trim() === '') {
        alert('Please enter a task');
        return;
    }

    var taskList = document.getElementById('task-list');
    var newTask = document.createElement('li');
    newTask.textContent = task;
    taskList.appendChild(newTask);

    taskInput.value = '';
}
