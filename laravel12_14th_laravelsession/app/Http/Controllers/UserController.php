<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        $request->session()->put('user', $request->input('user'));
        $request->session()->put('allData', $request->input());

        return redirect('profile');
    }

    public function logout()
    {
        session()->pull('user');
        return redirect('profile');
    }
}
