@extends('app', ['title' => 'Edit','header' => 'Edit Pegawai'])
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
        <div class="card-body p-4">
            <form action="/pegawai/{{$data->id}}" method="post">
                @csrf
                 @method("PUT")
                <div class="form-group form">
                    <label for="">Nama </label>
                    <input type="text" class="form-control" value="{{$data->pegawai_nama}}" name="nama" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Jabatan </label>
                    <input type="text" class="form-control" value="{{$data->pegawai_jabatan}}" name="jabatan" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Umur </label>
                    <input type="number" class="form-control" value="{{$data->pegawai_umur}}" name="umur" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Alamat </label>
                    <textarea name="alamat" class="form-control" required="required">{{$data->pegawai_alamat}}"</textarea>
                </div>
                <div class="form mt-3">
                    <input type="submit" class="form-control btn btn-success" value="Simpan Data">
                </div>

            </form>
        </div>
    </div>



@endsection


