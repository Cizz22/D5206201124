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


//Route Tugas Semester 1
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



//Route Pegawai
Route::resource('pegawai', "PegawaiController");
Route::post('pegawai/search', 'PegawaiController@cari')->name('pegawai.search');
Route::get('pegawai/delete/{id}', "PegawaiController@hapus")->name("pegawai.hapus");

//Route Tugas Pegawai
Route::resource('task', "TaskController");
Route::get('task/delete/{id}', "TaskController@hapus")->name("task.hapus");
Route::post('task/search', 'TaskController@cari')->name('task.search');


//Route Absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::post('absen/search', 'AbsenController@cari')->name('absen.search');
Route::get('/absen/show/{id}','AbsenController@show');

//Route snack
Route::get('/snack','SnackController@index');
Route::get('/snack/tambah','SnackController@tambah');
Route::post('/snack/store','SnackController@store');
Route::get('/snack/edit/{id}','SnackController@edit');
Route::post('/snack/update','SnackController@update');
Route::get('/snack/hapus/{id}','SnackController@hapus');
Route::post('snack/search', 'SnackController@cari')->name('snack.search');
Route::get('/snack/{id}','SnackController@show');

//Route EAS (Keranjang Belanja)
Route::get('/eas', 'EASController@index');
Route::get('/eas/tambah','EASController@tambah');
Route::get('/eas/hapus/{id}','EASController@hapus');
Route::post('/eas', 'EASController@store');


