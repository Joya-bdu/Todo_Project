 <div>
    {{-- The best athlete wants his opponent at his best. --}}
    <header class="bg-gray-800 text-white p-4">
        <h1 class="text-2xl font-bold">Task Manager</h1>
        <p class="text-sm">Manage your tasks efficiently</p>
    </header>

    @if(session()->has('message'))
        <div class="bg-green-500 text-white p-4 mt-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="addTask" class="mt-4">
        <input type="text" wire:model="title" placeholder="Add a new task" class="border p-2 w-full">
        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        <button type="submit" class="bg-blue-500 text-white p-2 mt-2">Add Task</button>
    </form>
</div>
