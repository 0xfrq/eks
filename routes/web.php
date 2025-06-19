<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Dashboard page
Route::get('/dashboard', fn () => view('dashboard.index'))->name('dashboard');

// Resourceful routes for posts (index, create, store)
Route::resource('posts', PostController::class)->only([
    'index', 'create', 'store'
]);

// Welcome or landing page
Route::get('/', function () {
    return view('welcome');
});
