<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function setNameAttribute($val)
    {
        $this->attributes['name'] = ucfirst($val);
    }

    public function setPhoneAttribute($val)
    {
        $this->attributes['phone'] = "+92-" . $val;
    }
}