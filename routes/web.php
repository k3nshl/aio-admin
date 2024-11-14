<?php

use App\Http\Controllers\Administrative\ControllerIndex;
use Illuminate\Support\Facades\Route;

Route::view('/', 'user.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

Route::resource('user', ControllerIndex::class)
->middleware(['auth']);
