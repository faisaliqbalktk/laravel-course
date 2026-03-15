<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Exists;

class UserController extends Controller
{

    function userHome()
    {
        // here view return in controlller
        return view('home');
    }

    function userAbout($name)
    {
        return view('about', ['user' => $name]);
    }

    // get nested view (admin/login)
    function getAdminLogin()
    {
        if (view()->exists('admin.login')) {
            return view('admin.login');
        }
        // Optional fallback if view not found
        abort(404, 'Admin login view not found');
    }
}
