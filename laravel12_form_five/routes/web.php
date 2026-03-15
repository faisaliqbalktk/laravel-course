<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserControllerTwo;

Route::get('/', function () {
    return view('welcome');
});


// for form 1 and for controller 1
// Route::view('user-form', 'user-form');
// Route::post('adduser', [UserController::class, 'addUser']);


// for form 2 and for controller 2
Route::view('user-form-two', 'user-form-two');
Route::post('addUser', [UserControllerTwo::class, 'addUser']);
