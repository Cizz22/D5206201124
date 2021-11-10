<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showGreetings(){
        return view("showgreetings");
    }

    function sayHi(Request $request){
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $first =  test_input($request->input("first"));
        $last =  test_input($request->input("last"));
        $sex =  test_input($request->input("sex"));
        $age =  test_input($request->input("age"));

        return view("tugas", compact(["first","last","sex","age"]));
    }
}
