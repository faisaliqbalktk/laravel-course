<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mail', [MailController::class, 'sendEmail']);

Route::post('send-email', [MailController::class, 'sendFormEmail']);
Route::view('send-email', 'send-email');