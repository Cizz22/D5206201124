<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SnackController extends Controller
{
    public function index()
    {
    	// mengambil data dari table absen
    	$snack = DB::table('snack')
        ->paginate(7);

    	// mengirim data absen ke view index
    	return view('snack.index',compact(['snack']));

    }

// method untuk menampilkan view form tambah absen
public function tambah()
{

	// memanggil view tambah
	return view('snack.tambah');

}

// method untuk insert data ke table absen
public function store(Request $request)
{
	// insert data ke table absen
	DB::table('snack')->insert([
		'merksnack' => $request->merksnack,
		'stocksnack' => $request->stocksnack,
		'tersedia' => $request->status
	]);
	// alihkan halaman ke halaman absen
	return redirect('/snack');

}

// method untuk edit data absen
public function edit($id)
{
	// mengambil data absen berdasarkan id yang dipilih
	$snack = DB::table('snack')->where('kodesnack',$id)->first();
	// passing data absen yang didapat ke view edit.blade.php
	return view('snack.edit',compact(['snack']));

}

// update data pegawai
public function update(Request $request)
{
	// update data absen
	DB::table('snack')->where('kodesnack',$request->id)->update([
		'merksnack' => $request->merksnack,
		'stocksnack' => $request->stocksnack,
		'tersedia' => $request->status
	]);
	// alihkan halaman ke halaman awal
	return redirect('/snack');
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('snack')->where('kodesnack',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/snack');
}


public function cari(Request $request)
{
    $snack = DB::table('snack')
    ->where('merksnack','like','%'.$request->cari.'%')
    ->paginate();

    return view('snack.index', compact(['snack']));

}
    public function show($id){
        $snack= DB::table('snack')->where('kodesnack',  $id)->first();
        return view('snack.show', compact(['snack']));
    }

}
