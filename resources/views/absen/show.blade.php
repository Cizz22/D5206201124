@extends('layout.app', ['title' => 'Detail','header' => 'Detail Absen'])
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
        <a class="text-decoration-none text-light" href="/absen"> Kembali</a>
    </button>


    <div class="card rounded shadow mx-auto">
        <div class="card-header">
            Detail Data
        </div>
        <div class="card-body p-5">
                <div class="form-group form mb-5">
                    <label for="">Nama Pegawai<span class="ml-2">:</span></label>
                    <p>{{$absen->pegawai_nama}}</p>
                </div>
                <div class="form-group form mb-5">
                    <label for="">Tanggal Absen<span class="ml-2">:</span></label>
                    <p>{{$absen->Tanggal}}</p>
                </div>
                <div class="form-group form mb-5">
                    <label for="">Status Absen<span class="ml-2">:</span></label>
                    <p>{{$absen->Status == "H"?"Hadir":"Absen"}}</p>
                </div>

        </div>
    </div>



@endsection

