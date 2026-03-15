<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser() {
        // return "Faisal Iqbal";
        return view('user');
    }

    function aboutUser() {
        return "Hello this is faisu";
    }

    function getUserName($name){
        // return "this is ". $name;
        return view('/getuser', ['name'=>$name]);
    }

    // nested view
    function adminLogin() {
        return view('admin.login');
    }
}
