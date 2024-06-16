<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::middleware('auth')->group(function () {
    Volt::route('users', 'pages.users.list')
        ->name('users.index');
    Volt::route('appointments', 'pages.appointments.create')->name('appointments.create');
});



require __DIR__ . '/auth.php';
