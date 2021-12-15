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


}
