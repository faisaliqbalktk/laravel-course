<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    public function device(Device $key)
    {
        // return $key; // for single data
        return $key->all();
    }
}
