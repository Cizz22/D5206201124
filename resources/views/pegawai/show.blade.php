@extends('layout.app', ['title' => 'Detail','header' => 'Detail Pegawai'])
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
        <a class="text-decoration-none text-light" href="/pegawai"> Kembali</a>
    </button>


    <div class="card rounded shadow mx-auto">
        <div class="card-header">
            Detail Data
        </div>
        <div class="card-body p-5">
            <div class="form-group form mb-5">
                <label for="">Nama</label> <span class="" style="margin-left: 20px">:</span>
                {{$pegawai->pegawai_nama}}
            </div>
            <div class="form-group form mb-5">
                <label for="">Jabatan </label><span class="" style="margin-left: 20px">:</span>
                {{$pegawai->pegawai_jabatan}}
            </div>
            <div class="form-group form mb-5">
                <label for="">Umur </label> <span class="" style="margin-left: 20px">:</span>
                {{$pegawai->pegawai_umur}}
            </div>
            <div class="form-group form mb-5">
                <label for="">Alamat </label> <span class="" style="margin-left: 20px">:</span>
                {{$pegawai->pegawai_alamat}}
            </div>
        </div>
    </div>



@endsection

