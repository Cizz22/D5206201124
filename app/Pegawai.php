<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    public $timestamps = false;
    protected $fillable = ['pegawai_nama', 'pegawai_jabatan', 'pegawai_umur', 'pegawai_alamat','pegawai_id'];
}
