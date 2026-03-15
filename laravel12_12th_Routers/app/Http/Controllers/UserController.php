<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * GET request
     * Used to fetch data
     */
    public function get(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');

        return "GET method called. Name: {$name}, Email: {$email}";
    }

    /**
     * POST request
     * Used to create new data
     */
    public function post(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');

        return "POST method called. Name: {$name}, Email: {$email}";
    }

    /**
     * PUT request
     * Used to fully update existing data
     */
    public function put(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');

        return "PUT method called Updated Name: {$name}, Email: {$email}";
    }

    /**
     * PATCH request
     * Used to partially update existing data
     */
    public function patch(Request $req)
    {
        $data = $req->all();

        return response()->json([
            'message' => "PATCH method called. User data partially updated",
            'updated_fields' => $data
        ]);
    }

    /**
     * DELETE request
     * Used to delete data
     */
    public function delete(Request $req)
    {
        return "DELETE method called. User data deleted.";
    }

    /**
     * OPTIONS request
     * Used for CORS / allowed methods discovery
     */
    public function options()
    {
        return response()->json([
            'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS']
        ]);
    }

    /**
     * VIEW response
     * Used to directly load a Blade view
     */
    public function view()
    {
        return view('user.profile', [
            'title' => 'User Profile Page'
        ]);
    }


    // Any method to handle all HTTP verbs
    public function any(Request $req)
    {
        $method = $req->method();
        return "ANY method called. HTTP Method used: {$method}";
    }

    // Match method to handle specific HTTP verbs
    public function group1(Request $req)
    {
        $method = $req->method();
        return "MATCH method called. HTTP Method used: {$method}";
    }

    public function group2(Request $req)
    {
        $method = $req->method();
        return "MATCH method called. HTTP Method used: {$method}";
    }



}
