<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    function productManyData(){
        return $this->hasMany('App\Models\Product');
    }
}
