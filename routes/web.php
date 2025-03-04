<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        "greeting" => "Hello World"
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = Job::all();

    //One Method
    // Arr::first( $jobs, function($job) use ($id) {
    //     return $job['id'] == $id;
    // });

    //2nd Method
    // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    //3rd Method
    $job = Job::find($id);
    // dd($job);
    return view('job', [
        "job" => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});