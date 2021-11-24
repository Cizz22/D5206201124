<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task_name', 'tanggal', 'status', 'pegawai_id'];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }

    public function getStatusAttribute(){
        if($this->attributes['status']) return "Selesai";
        else return "Belum selesai";
    }

}
