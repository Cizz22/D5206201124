<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtsController extends Controller
{
    function index(){
        return view("tugas.ets");
    }
}
