<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    function manyList(){
        return Seller::find(2)->productManyData;
    }
}
