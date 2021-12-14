@extends('layout.app', ['title' => 'Tambah','header' => 'Tambah Snack'])
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
            Tambah Data
        </div>
        <div class="card-body p-5">
            <form action="/snack/update" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$snack->kodesnack}}">
                <div class="form-group form ">
                    <label for="">Merk Snack </label>
                    <input type="text" value="{{$snack->merksnack}}" class="form-control" name="merksnack" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Stock Snack </label>
                    <input type="number" value="{{$snack->stocksnack}}" class="form-control" name="stocksnack" required="required"> <br/>
                </div>
                <div class="form-group">
                    <label for="">Status Snack</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Y" name="status" id="flexRadioDefault2" {{$snack->tersedia == "Y"?"checked":null}}>
                        <label class="form-check-label"  for="flexRadioDefault2">
                             <p class="ml-4">Tersedia</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  type="radio" value="N" name="status" id="flexRadioDefault2" {{$snack->tersedia == "N"?"checked":null}}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            <p class="ml-4">Habis</p>
                        </label>
                    </div>
                </div>
                <div class="form mt-3">
                    <input type="submit" class="form-control btn btn-success" value="Simpan Data">
                </div>

            </form>
        </div>
    </div>



@endsection

