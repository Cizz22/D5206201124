@extends('layout.app', ['title'=>'Tambah','header' => 'Tambah Absen'])
@section('css')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link
    href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
    rel="stylesheet">

<style>
    .form{
        margin-right: auto;
        margin-left: auto;
    }

    .card{
        width: 50%;
    }
</style>
@endsection

@section('script')
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script
    src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
</script>

<script type="text/javascript">
    $(function() {
        $('#dtpickerdemo').datetimepicker({
            format: "YYYY-MM-DD hh:mm:ss",
            "defaultDate": new Date(),
            locale : "id"
        });
    });
</script>
@endsection

@section('content')
<button class="btn btn-secondary">
    <a class="text-decoration-none text-light" href="/absen"> Kembali</a>
</button>


<div class="card rounded shadow mx-auto">
    <div class="card-header">
        Tambah
    </div>
    <div class="card-body p-4">
        <form action="/absen/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" value="{{$a->ID}}" name="id">
            <div class="form-group">
                <label for="">Pegawai</label>
                <select class="form-control" name="idpegawai" id="">
                    @foreach ($pegawai as $p)
                        <option value="{{$p->pegawai_id}}" {{$p->pegawai_id == $a->IDPegawai?"selected":null}} >{{$p->pegawai_nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dtpickerdemo">Tanggal :</label>
                <div class='input-group date' id='dtpickerdemo'>
                    <input type='text' class="form-control" value="{{ $a->Tanggal }}" name="tanggal" required="required" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="H" name="status" id="flexRadioDefault2" {{$a->Status =="H"?"checked":null}}>
                    <label class="form-check-label"  for="flexRadioDefault2">
                         <p class="ml-4">Hadir</p>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="A" name="status" id="flexRadioDefault2" {{$a->Status =="A"?"checked":null}}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <p class="ml-4">Absen</p>
                    </label>
                </div>
            </div>


            </div>
            <input class="w-50 mx-auto btn btn-primary mb-3" type="submit" value="Simpan Data">
        </form>
    </div>
</div>
@endsection

