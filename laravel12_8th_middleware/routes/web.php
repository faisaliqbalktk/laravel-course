<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// --- for seperate seperate
// Route::view('home', 'home')->middleware('check1');
// Route::view('about', 'about')->middleware('check1');

// --- for multiple
Route::middleware('check1')->group(function () {
    Route::view('home', 'home');
    Route::view('about', 'about');
});



// if you want to use for middleware for single route then use below code
// and here you don't need to add in app.php file you can directly use it
// use App\Http\Middleware\AgeCheck as check1;
// Route::view('home', 'home')->middleware(check1::class);

// if you want to use multiple middleware for single route then use below code
// Route::view('home', 'home')->middleware([check1::class, check2::class]);
// Route::view('about', 'about')->middleware([check1::class, check2::class]);
