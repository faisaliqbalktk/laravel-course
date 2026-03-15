<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


// Route::view('student/home', 'home');
// Route::get('student/show', [HomeController::class, 'show']);
// Route::get('student/add', [HomeController::class, 'add']);

// Route group with prefix in laravel
Route::prefix('student')->group(function () {
    Route::view('/home', 'home');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});


// Route Group with Controller in Laravel 
Route::controller(StudentController::class)->group(function () {
    Route::get('showlist', 'showlist');
    Route::get('add', 'addlist');
    Route::get('delete', 'deletelist');
    Route::get('about/{name}', 'about');
});

// Route::get('about/{name}', [StudentController::class, 'about']);
