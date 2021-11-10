<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;


Route::get("/", function(){
    return view("welcome");
});

Route::get("/tugas4", function() {
    return view("tugas.tugas4");
})->name("tugas4");

Route::get("/praktikum2", function() {
    return view("tugas.praktikum2");
})->name("praktikum2");

Route::get("ets", "EtsController@index")->name("ets");

Route::get("tugasphp", "TugasphpController@index")->name("tugasphp");

Route::post('luas', "TugasphpController@luasBalok")->name("luas");
