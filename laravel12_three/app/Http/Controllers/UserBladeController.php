<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBladeController extends Controller
{
    public function userHome()
    {
        $name = "Faisal";
        $users = ['faisal', 'khan', 'khattak'];
        $products = [
            ['name' => 'Laptop', 'price' => 1200, 'stock' => 5],
            ['name' => 'Phone', 'price' => 800, 'stock' => 10],
            ['name' => 'Headphones', 'price' => 150, 'stock' => 0],
            ['name' => 'Monitor', 'price' => 300, 'stock' => 3],
        ];


        return view('bladeHome', [
            'name'  => $name,
            'users' => $users,
            'products' => $products
        ]);
    }
}
