<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        $details = [
            'This is the name'  => $request->username,
            'This is the city'  => $request->city,
            'This is the email' => $request->email,
        ];

        foreach ($details as $label => $value) {
            echo $label . ': ' . e($value) . '<br>';
        }
    }
}
