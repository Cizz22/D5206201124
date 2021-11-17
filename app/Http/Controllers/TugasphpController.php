<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasphpController extends Controller
{
    function index(){
        return view("tugas.tugasphp");
    }

    function luasBalok(Request $request){
        $panjang = $request->panjang;
        $lebar = $request->lebar;
        $tinggi = $request->tinggi;

        $volume = floatval($panjang * $lebar * $tinggi);

        return view("tugas.luas")->with("volume", $volume);
    }
}
