<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        echo "Request Method is ". $request->method();
        echo '<br>';
        echo "Request Path is ". $request->path();
        echo '<br>';
        echo "Request Url is ". $request->url();
        echo '<br>';
        echo "Request name is ". $request->name;
        echo '<br>';
        echo "Request name is ". $request->input('name');
        echo '<br>';

        // to check full request
        echo '<pre>';
        print_r($request->input());
        echo '<br>';

        // to use collect it will show in object form
        echo '<pre>';
        print_r($request->collect());
        echo '<br>';

        if ($request->isMethod('post')) {
            echo "execute code for post request";
        } else {
            echo "execute code for post request";
        }
    }
}
