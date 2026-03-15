<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function getNameAttribute($val)
    {
        return ucfirst($val);
    }

    public function getPhoneAttribute($val)
    {
        return "+92-" . $val;
    }
}
