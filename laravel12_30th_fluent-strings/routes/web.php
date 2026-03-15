<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

$info = "hello, let's learn laravel";
// $info = Str::ucfirst($info);
// $info = Str::replaceFirst("Hello", "Hi", $info);
// $info = Str::camel($info);
// echo $info;

$info = Str::of($info)->ucfirst()->replaceFirst("Hello", "Hi")->camel(); 
echo $info;

Route::get('/', function () {
    return view('welcome');
});
