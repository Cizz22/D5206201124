@extends('layout.app', ['title' => 'Beli','header' => 'Beli Produk'])
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
        <a class="text-decoration-none text-light" href="/eas"> Kembali</a>
    </button>


    <div class="card rounded shadow mx-auto">
        <div class="card-header">
            Beli/Tambah Produk
        </div>
        <div class="card-body p-5">
            <form action="/eas/update" method="post">
                @csrf
                <input type="hidden" value="{{$belanja->ID}}" name="id">
                <div class="form-group form ">
                    <label for="">Kode Barang</label>
                    <input type="text" class="form-control" value="{{$belanja->KodeBarang}}" disabled pattern="[0-9]+" oninvalid="setCustomValidity('Input hanya untuk angka')" name="kode" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Harga Barang</label>
                    <input type="text" class="form-control" pattern="[0-9]+" value="{{$belanja->Harga}}" disabled oninvalid="setCustomValidity('Input hanya untuk angka')" name="harga" required="required"> <br/>
                </div>
                <div class="form-group form">
                    <label for="">Jumlah Pembelian</label>
                    <input type="text" class="form-control" value="{{$belanja->Jumlah}}" pattern="[0-9]+" oninvalid="setCustomValidity('Input hanya untuk angka')" name="jumlah" required="required"> <br/>
                </div>
                <div class="form mt-3">
                    <input type="submit" class="form-control btn btn-success" oninvalid="setCustomValidity('Input hanya untuk angka')" value="Simpan Data">
                </div>

            </form>
        </div>
    </div>



@endsection

