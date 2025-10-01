<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Home route
Route::get('/', function () {
    return view('home');
});

// Resourceful routes for Jobs (handles index, show, create, store, edit, update, destroy)
Route::resource('jobs', JobController::class);
