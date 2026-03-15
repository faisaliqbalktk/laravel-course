<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function addUser(Request $request)
    {
        // your db code

        $request->session()->flash('message', 'User has been added successfully');
        return redirect('user');
    }
}
