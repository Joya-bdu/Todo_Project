<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\TaskController;
use App\Http\Livewire\TaskManager;




Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('/tasks', function () {
    return view('tasks');
});
require __DIR__.'/auth.php';
