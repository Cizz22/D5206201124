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
        $request->validate([
            "first" => "required",
            "last" => "required",
            "sex" => "required",
            "age" => "required"
        ]);

        $first =  test_input($request->first);
        $last =  test_input($request->last);
        $sex =  test_input($request->sex);
        $age =  test_input($request->age);

        return view("tugas", compact(["first","last","sex","age"]));
    }
}
