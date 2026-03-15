<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    function productData(){
        return $this->hasOne('App\Models\Product');
    }

    // function productData(){
    //     // if you want to give id that to match with this id
    //     return $this->hasOne('App\Models\Product', 'id_name');
    // }
}
