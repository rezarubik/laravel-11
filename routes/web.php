<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('home', function () {
    return 'This is home routes';
});
