<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EloquentUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [EloquentUserController::class, 'queries']);
