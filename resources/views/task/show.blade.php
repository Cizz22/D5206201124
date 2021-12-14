@extends('layout.app', ['title' => 'Detail','header' => 'Detail Tugas'])
@section('css')
<style>
    .form{
        margin-right: auto;
        margin-left: auto;
        margin-top: -20px
    }

    .card{
        width: 65%;
    }
</style>
@endsection
@section('content')
    <button class="btn btn-secondary">
        <a class="text-decoration-none text-light" href="/snack"> Kembali</a>
    </button>


    <div class="card rounded shadow mx-auto">
        <div class="card-header">
            Detail Data
        </div>
        <div class="card-body p-5">
            <div class="form-group form mb-5">
                <label for="">Nama Pegawai</label> <span class="" style="margin-left: 20px">:</span>
                {{$tugas->pegawai_nama}}
            </div>
            <div class="form-group form mb-5">
                <label for="">Tugas </label><span class="" style="margin-left: 20px">:</span>
                {{$tugas->NamaTugas}}
            </div>
            <div class="form-group form mb-5">
                <label for="">Tanggal</label> <span class="" style="margin-left: 20px">:</span>
                {{$tugas->Tanggal}}
            </div>
            <div class="form-group form mb-5">
                <label for="">Status</label> <span class="" style="margin-left: 20px">:</span>
                {{$tugas->Status == "H"?"Hadir":"Absen"}}
            </div>
        </div>
    </div>



@endsection

