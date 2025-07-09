<div>
    <header class="bg-gray-800 text-white p-4">
        <h1 class="text-2xl font-bold">Task Manager</h1>
        <p class="text-sm">Manage your tasks efficiently</p>
    </header>

    @if(session()->has('message'))
        <div class="bg-green-500 text-white p-4 mt-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="p-4">
        @if($editingTaskId)
            <form wire:submit.prevent="updateTask" class="mb-6">
                <input type="text" wire:model="editingTaskTitle" class="border p-2 w-full">
                @error('editingTaskTitle') <span class="text-red-500">{{ $message }}</span> @enderror
                <div class="mt-2 space-x-2">
                    <button type="submit" class="bg-blue-500 text-white p-2">Update Task</button>
                    <button type="button" wire:click="cancelEdit" class="bg-gray-500 text-white p-2">Cancel</button>
                </div>
            </form>
        @else
            <form wire:submit.prevent="addTask" class="mb-6">
                <input type="text" wire:model="title" placeholder="Add a new task" class="border p-2 w-full">
                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                <button type="submit" class="bg-blue-500 text-white p-2 mt-2">Add Task</button>
            </form>
        @endif

        <div class="space-y-2">
            @forelse($tasks as $task)
                <div class="flex justify-between items-center border p-3">
                    <span>{{ $task['title'] }}</span>
                    <div class="space-x-2">
                        <button wire:click="editTask({{ $task['id'] }})" class="text-yellow-600">Edit</button>
                        <button wire:click="deleteTask({{ $task['id'] }})" class="text-red-600">Delete</button>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">No tasks yet. Add one above!</p>
            @endforelse
        </div>
    </div>

    @livewire('counter')
    @livewire("user-profile", ['userName' => 'John Doe', 'userId' => 123])
</div>
