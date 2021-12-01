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

Route::get('greetings',"ViewController@showGreetings") ;
Route::post('sayhi',"ViewController@sayHi")->name("sayHi") ;

Route::resource('pegawai', "PegawaiController");

Route::get('pegawai/delete/{id}', "PegawaiController@hapus")->name("pegawai.hapus");

Route::resource('task', "TaskController");
Route::get('task/delete/{id}', "TaskController@hapus")->name("task.hapus");


Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

