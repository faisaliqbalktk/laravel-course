<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserBladeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| These routes drive the core web experience for the application.
| We leverage both closure-based views and controller-powered flows
| depending on the complexity and data needs.
|
*/

// Landing page route
Route::get('/', function () {
    return view('welcome');
});

// -----------------------------------------------------------------------------
// Static Pages
// -----------------------------------------------------------------------------

// Method 1: Serving a simple Blade view using a closure
Route::get('/home', function () {
    return view('home');
});

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

// Method 2: Serving a static view directly (cleaner for simple pages)
// Route::view('/about', 'about');
Route::view('/login', 'admin.login');

// -----------------------------------------------------------------------------
// Controller-Driven Pages
// -----------------------------------------------------------------------------
// When a page needs data from a model, business logic, or transformation,
// we route the request through a controller so the controller can fetch data
// and return an optimized view response.
Route::get('/user-home', [UserController::class, 'userHome']);
Route::get('/user-about/{name}', [UserController::class, 'userAbout']); // passing data here
Route::get('/admin-login', [UserController::class, 'getAdminLogin']);



// bladeHome
Route::get('/bladeHome', [UserBladeController::class, 'userHome']);
