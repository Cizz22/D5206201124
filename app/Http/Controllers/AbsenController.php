<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function index()
    {
    	// mengambil data dari table absen
    	$absen = DB::table('absen')
        ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate(7);

    	// mengirim data absen ke view index
    	return view('absen.index',['absen' => $absen]);

    }

// method untuk menampilkan view form tambah absen
public function tambah()
{

    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
	// memanggil view tambah
	return view('absen.tambah', compact(['pegawai']));

}

// method untuk insert data ke table absen
public function store(Request $request)
{
	// insert data ke table absen
	DB::table('absen')->insert([
		'IDPegawai' => $request->idpegawai,
		'Tanggal' => $request->tanggal,
		'Status' => $request->status
	]);
	// alihkan halaman ke halaman absen
	return redirect('/absen');

}

// method untuk edit data absen
public function edit($id)
{
    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
	// mengambil data absen berdasarkan id yang dipilih
	$a = DB::table('absen')->where('ID',$id)->first();
	// passing data absen yang didapat ke view edit.blade.php
	return view('absen.edit',compact(['a', 'pegawai']));

}

// update data pegawai
public function update(Request $request)
{
	// update data absen
	DB::table('absen')->where('ID',$request->id)->update([
		'IDPegawai' => $request->idpegawai,
		'Tanggal' => $request->tanggal,
		'Status' => $request->status
	]);
	// alihkan halaman ke halaman awal
	return redirect('/absen');
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('absen')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/absen');
}


public function cari(Request $request)
{
    $absen = DB::table('absen')
    ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
    ->select('absen.*', 'pegawai.pegawai_nama')
    ->where('pegawai.pegawai_nama','like','%'.$request->cari.'%')
    ->paginate();

    return view('absen.index', compact(['absen']));

}

}
