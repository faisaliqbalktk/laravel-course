<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// *** Method 1
Route::get('/home', function () {
    return view('home');
});

// *** Method 2
Route::view('/about', 'about');

// *** dynamic route
Route::get('/dynamic/{name}', function($name) {
    return  view('dynamic', ['name' => $name]);
});


// *** redirect from one page to another
// route::redirect('/about', '/');
