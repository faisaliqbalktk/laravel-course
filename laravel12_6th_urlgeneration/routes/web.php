<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('test', 'home');

Route::view('about', 'about');
Route::view('about/{name}', 'about');



// Named Route
Route::view('namedroute', 'namedroute')->name('nr');
