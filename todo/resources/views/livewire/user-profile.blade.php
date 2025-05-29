<div>
    {{-- Stop trying to control. --}}
    <header class="bg-gray-800 text-white p-4">
        <h1 class="text-2xl font-bold">User Profile</h1>
        <p class="text-sm">Welcome {{$userName}}</p>
        @if($userId)
            <p class="text-sm">User ID: {{$userId}}</p>
        @endif
</header>
</div>
