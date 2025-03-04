<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
        'jobs' => [
            [
                "id" => 1,
                "title" => "Director",
                "salary" => "20,000"
            ],
            [
                "id" => 2,
                "title" => "Teacher",
                "salary" => "30,000"
            ],
            [
                "id" => 3,
                "title" => "Principal",
                "salary" => "50,000"
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            "id" => 1,
            "title" => "Director",
            "salary" => "20,000"
        ],
        [
            "id" => 2,
            "title" => "Teacher",
            "salary" => "30,000"
        ],
        [
            "id" => 3,
            "title" => "Principal",
            "salary" => "50,000"
        ]
    ];

    //One Method
    // Arr::first( $jobs, function($job) use ($id) {
    //     return $job['id'] == $id;
    // });

    //2nd Method
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    // dd($job);
    return view('job', [
        "job" => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});