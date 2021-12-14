@extends('layout.app', ['title' => 'Detail','header' => 'Detail Snack'])
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
                <label for="">Merk snack</label> <span class="" style="margin-left: 20px">:</span>
                {{$snack->merksnack}}
            </div>
            <div class="form-group form mb-5">
                <label for="">Stock snake</label><span class="" style="margin-left: 20px">:</span>
                {{$snack->stocksnack}}
            </div>
            <div class="form-group form mb-5">
                <label for="">Status</label> <span class="" style="margin-left: 20px">:</span>
                {{$snack->tersedia == "Y"?"Tersedia":"Habis"}}
            </div>
        </div>
    </div>



@endsection

