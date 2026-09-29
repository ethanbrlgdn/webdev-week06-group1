<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $features = [
        'Simple and clean design',
        'Reusable Blade components',
        'Easy page navigation'
    ];

    return view('home', compact('features'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});