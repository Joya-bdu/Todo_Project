<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Session;

class TaskManager extends Component
{
    public $title = '';
    public $tasks;
    public $editingTaskId = null;
    public $editingTaskTitle = '';

    protected $rules = [
        'title' => 'required|max:255|string',
        'editingTaskTitle' => 'required|max:255|string',
    ];

    public function mount()
    {
        $this->loadTasks();
    }

    public function loadTasks()
    {
        $this->tasks = Task::latest()->get();
    }

    public function addTask()
    {
        $this->validateOnly('title');
        
        Task::create([
            'title' => $this->title,
            'completed' => false
        ]);
        
        $this->title = '';
        $this->loadTasks();
        Session::flash('message', 'Task added successfully.');
    }

    public function editTask($taskId)
    {
        $task = Task::findOrFail($taskId);
        $this->editingTaskId = $taskId;
        $this->editingTaskTitle = $task->title;
    }

    public function updateTask()
    {
        $this->validateOnly('editingTaskTitle');
        
        Task::findOrFail($this->editingTaskId)->update([
            'title' => $this->editingTaskTitle
        ]);
        
        $this->cancelEdit();
        $this->loadTasks();
        Session::flash('message', 'Task updated successfully.');
    }

    public function cancelEdit()
    {
        $this->editingTaskId = null;
        $this->editingTaskTitle = '';
    }

    public function deleteTask($taskId)
    {
        Task::findOrFail($taskId)->delete();
        $this->loadTasks();
        Session::flash('message', 'Task deleted successfully.');
    }

    public function toggleComplete($taskId)
    {
        $task = Task::findOrFail($taskId);
        $task->update([
            'completed' => !$task->completed
        ]);
        $this->loadTasks();
    }

    public function render()
    {
        return view('livewire.task-manager');
    }
}