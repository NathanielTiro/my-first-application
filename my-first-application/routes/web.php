<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



// All Jobs
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->paginate(10)
    ]);
});

// Single Job
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// Create Job Form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store Job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    \App\Models\Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1 // hard-coded for now
    ]);

    return redirect('/jobs');
});

// Edit Job Form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update Job
// Update Job
Route::patch('/jobs/{job}', function (\App\Models\Job $job) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job->update(request()->only(['title', 'salary'])); // safer

    return redirect('/jobs/' . $job->id);
});


// Delete Job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});