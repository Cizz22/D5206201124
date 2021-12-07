<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['NamaTugas', 'Tanggal', 'Status', 'IDPegawai'];
    protected $table = 'tugas';
    public $timestamps = false;

    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'IDPegawai', 'pegawai_id');
    }

    public function getStatusAttribute(){
        if($this->attributes['Status']) return "Selesai";
        else return "Belum selesai";
    }

}
