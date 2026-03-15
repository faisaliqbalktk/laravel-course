<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/many-to-one', [SellerController::class, 'manyToOne']);