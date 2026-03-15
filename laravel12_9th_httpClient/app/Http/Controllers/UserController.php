<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    public function getUser()
    {
        // Send HTTP GET request
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');

        // Parse JSON response into array
        $data = $response->json();

        // Return to 'user' view with data
        return view('user', ['data' => $data]);



        // Status
        // $status = $response->status(); // 200
        // $ok = $response->ok(); // true

        // Body
        // $raw = $response->body();
        // $json = $response->json();
        // $object = $response->object();
        // $collection = $response->collect();

        // Headers
        // $contentType = $response->header('Content-Type');
        // $allHeaders = $response->headers();

        // Debug
        // $response->dd();
    }
}
