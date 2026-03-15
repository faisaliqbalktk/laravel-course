<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ProductsController extends Controller
{
    //
    public function productList(){
        $totalProduct=20;
        return Blade::render('<h1>{{$total}} Product List</h1>', ['total' => $totalProduct]);
    }
}
