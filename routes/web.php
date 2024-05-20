<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home Page';
    return view('home', ['title' => $title]);
});

Route::get('/blog', function () {
    $title = 'Blog Page';
    return view('blog', ['title' => $title]);
});

Route::get('/about', function () {
    $title = 'Blog Page';
    $name = 'Muhammad Reza Pahlevi Y';
    return view('about', ['title' => $title, 'name' => $name]);
});

Route::get('/contact', function () {
    $title = 'Blog Page';
    return view('contact', ['title' => $title]);
});

Route::get('home', function () {
    return 'This is home routes';
});
