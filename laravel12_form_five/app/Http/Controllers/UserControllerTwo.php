<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerTwo extends Controller
{
    function addUser(Request $request)
    {
        return $request->validate(
            [
                'username' => 'required|string|min:3|max:255|uppercase',
                'email'    => 'required|email|max:255',
                'gender'   => 'required|in:Male,Female',
                'city'     => 'required|string',
                'skills'   => 'required|array',
                'skills.*' => 'string',
                'age'      => 'required|integer|min:18|max:100',
            ],
            [
                // Custom Messages
                // Username
                'username.required' => 'Username is required.',
                'username.string'   => 'Username must be a valid string.',
                'username.min'      => 'Username must be at least 3 characters long.',
                'username.max'      => 'Username may not exceed 255 characters.',

                // Email
                'email.required' => 'Email address is required.',
                'email.email'    => 'Please enter a valid email address.',
                'email.max'      => 'Email may not exceed 255 characters.',

                // Gender
                'gender.required' => 'Please select a gender.',
                'gender.in'       => 'Selected gender is invalid.',

                // City
                'city.required' => 'Please select a city.',
                'city.string'   => 'City must be a valid value.',

                // Skills
                'skills.required' => 'Please select at least one skill.',
                'skills.array'    => 'Skills must be selected correctly.',
                'skills.*.string' => 'Each skill must be a valid value.',

                // Age
                'age.required' => 'Age is required.',
                'age.integer'  => 'Age must be a number.',
                'age.min'      => 'Age must be at least 18 years.',
                'age.max'      => 'Age must not be greater than 100.',
            ]
        );
    }
}
