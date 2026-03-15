<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function showlist()
    {
        return 'list of student';
    }

    function addlist()
    {
        return 'add list of student';
    }

    function deletelist()
    {
        return 'delete list of student';
    }

    function about($name)
    {
        return $name;
    }
}
