<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// All Jobs with Eager Loading + Pagination
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->paginate(10) // eager load + paginate
    ]);
});

// Single Job
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});