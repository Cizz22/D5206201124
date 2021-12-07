@extends('layout.app', ['title' => 'Tambah','header' => 'Tambah Pegawai'])
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
            Tambah Data
        </div>
        <div class="card-body p-5">
            <form action="/pegawai" method="post">
                @csrf
                <div class="form-group form ">
                    <label for="">Nama </label>
                    <input type="text" class="form-control" name="nama" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Jabatan </label>
                    <input type="text" class="form-control" name="jabatan" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Umur </label>
                    <input type="number" class="form-control" name="umur" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Alamat </label>
                    <textarea name="alamat" class="form-control" required="required"></textarea>
                </div>
                <div class="form mt-3">
                    <input type="submit" class="form-control btn btn-success" value="Simpan Data">
                </div>

            </form>
        </div>
    </div>



@endsection

