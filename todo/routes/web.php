<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\TaskController;
use App\Http\Livewire\TaskManager;
use App\Livewire\Counter;
use App\Livewire\InputPreview;
use App\Livewire\VisibilityToggle;
use App\Livewire\UserProfile;

Route::get('/counter', Counter::class)
    ->name('counter');
Route::get('/input-preview', InputPreview::class)
    ->name('input-preview');
Route::get('/visibility-toggle', VisibilityToggle::class)
    ->name('visibility-toggle');
Route::get('/user-profile/{userId?}', UserProfile::class)
    ->name('user-profile');
    



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
