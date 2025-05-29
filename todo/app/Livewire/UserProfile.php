<?php

namespace App\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public $userId;
    public $userName = "Guest";

    public function mount($userId = null, $userName = "Guest")
{
    $this->userId = $userId;
    $this->userName = $userId ? "User " . $userName : $userName;
}


    public function render()
    {
        return view('livewire.user-profile');
    }
}
