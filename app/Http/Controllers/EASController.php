<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EASController extends Controller
{
    public function index()
    {
    	// mengambil data dari table absen
    	$belanja = DB::table('keranjangbelanja')
        ->paginate(5);

    	// mengirim data absen ke view index
    	return view('eas.index',['belanja' => $belanja]);
    }

// method untuk menampilkan view form tambah absen
public function tambah()
{
	// memanggil view tambah
	return view('eas.tambah');

}

// method untuk insert data ke table absen
public function store(Request $request)
{
	// insert data ke table absen
	DB::table('keranjangbelanja')->insert([
		'KodeBarang' => $request->kode,
		'Jumlah' => $request->jumlah,
		'Harga' => $request->harga
	]);
	// alihkan halaman ke halaman absen
	return redirect('/eas');

}


// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('keranjangbelanja')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
}

// method untuk edit data absen
public function edit($id)
{
	// mengambil data absen berdasarkan id yang dipilih
	$belanja = DB::table('keranjangbelanja')->where('ID',$id)->first();
	// passing data absen yang didapat ke view edit.blade.php
	return view('eas.edit',compact(['belanja']));

}

// update data pegawai
public function update(Request $request)
{
	// update data absen
	DB::table('keranjangbelanja')->where('ID',$request->id)->update([
		'Jumlah' => $request->jumlah,
	]);
	// alihkan halaman ke halaman awal
	return redirect('/eas');
}


}
