<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function queries()
    {
        $result = DB::table('query_testing_users')->get();
        // $result = DB::table('query_testing_users')->where('phone', 'LIKE', '0301%')->get();


        // $result = DB::table('query_testing_users')->insert([
        //     'name' => 'Faisu',
        //     'email' => 'faisu@gmail.com',
        //     'phone' => '0335-4663188'
        // ]);
        // if ($result) {
        //     return "Data Inserted";
        // } else {
        //     return "Data Not Inserted";
        // }


        // $result = DB::table('query_testing_users')
        //     ->where('name', 'Faisu')
        //     ->update([
        //         'name'  => 'Faisu ktk',
        //         'email' => 'faisuktk@gmail.com',
        //     ]);

        // if ($result) {
        //     return "Data Updated";
        // } else {
        //     return "No Record Updated";
        // }


        // $result = DB::table('query_testing_users')
        //     ->where('name', 'Faisu ktk')
        //     ->delete();

        // if ($result) {
        //     return "Data Deleted";
        // } else {
        //     return "No Record Deleted";
        // }


        return view('users', ['users' => $result]);
    }
}
