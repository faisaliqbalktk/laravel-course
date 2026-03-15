<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', [UserController::class, 'get']);
// Route::post('/user', [UserController::class, 'post']);
// Route::put('/user', [UserController::class, 'put']);
// Route::patch('/user', [UserController::class, 'patch']);
// Route::delete('/user', [UserController::class, 'delete']);
// Route::view('form', 'user');



// Route::get('/user', [UserController::class, 'any']);
// Route::post('/user', [UserController::class, 'any']);
// Route::put('/user', [UserController::class, 'any']);
// Route::patch('/user', [UserController::class, 'any']);
// Route::delete('/user', [UserController::class, 'any']);
// Route::view('form', 'user');

// Route::any('/user', [UserController::class, 'any']);
// Route::view('form', 'user');

Route::match(['get', 'post'], '/user', [UserController::class, 'group1']);
Route::match(['put', 'delete'], '/user', [UserController::class, 'group2']);
Route::view('form', 'user');
