<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function save(){
        $student = new Student();
        $student->name = 'khan khattak';
        $student->phone = '477502572404';
        $student->email = 'khan@gmail.com';
        if($student->save()){
            echo "new student added";
        }

    }
}
