<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Test route returning JSON
Route::get('test', function () {
    return [
        'name' => 'Faisal',
        'Designation' => 'Software Engineer'
    ];
});


Route::get('students', [StudentController::class, 'list']);
Route::get('add', [StudentController::class, 'addStudent']);