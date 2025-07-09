<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <button wire:click="increment" class="bg-blue-500 text-white p-2 mt-2">Increment</button>
    <button wire:click="decrement" class="bg-blue-500 text-white p-2 mt-2">Decrement</button>

    <span>
        {{ $count }}
    </span>
</div>
