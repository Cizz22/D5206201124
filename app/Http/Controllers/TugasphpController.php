<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasphpController extends Controller
{
    function index(){
        return view("tugas.tugasphp");
    }

    function luasBalok(Request $request){
        $panjang = $request->input("panjang");
        $lebar = $request->input("lebar");
        $tinggi = $request->input("tinggi");

        $volume = floatval($panjang * $lebar * $tinggi);

        return view("tugas.luas")->with("volume", $volume);
    }
}
