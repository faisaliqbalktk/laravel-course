<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    function manyToOne(){
        // return Product::all();
        $product = Product::with('seller')->get();
        return $product;
    }
}
