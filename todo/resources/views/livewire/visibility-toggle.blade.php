<div>
    {{-- Success is as dangerous as failure. --}}
    <button 
        wire:click="toggleVisibility" 
        class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
        {{ $isVisible ? 'Hide' : 'Show' }} Content
    </button>
    <div class="mt-4">
        @if($isVisible)
            <p class="bg-gray-100 p-4 rounded">
                This is the content that can be toggled. It is currently visible.
            </p>
        @else
            <p class="bg-gray-100 p-4 rounded">
                The content is hidden. Click the button to show it.
            </p>
        
            </p>
        @endif
        </div>

</div>
