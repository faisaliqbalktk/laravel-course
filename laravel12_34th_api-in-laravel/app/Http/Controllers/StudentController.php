<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function list(){
        return Student::all();
    }

    public function addStudent(Request $req){
        // return $req->input();
        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;
        if($student->save){
            // return "Student added";
            return ["result" => "student added successfully"];
        } else {
            // return "operation";
            return ["result" => "operation failed"];
        }

    }
}
