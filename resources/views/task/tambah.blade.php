@extends('app', ['title'=>'Tambah','header' => 'Tambah Tugas'])
@section('css')
<style>
    .form{
        margin-right: auto;
        margin-left: auto;
    }

    .card{
        width: 65%;
    }



</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
    </script>
@endsection
@section('content')
    <button class="btn btn-secondary">
        <a class="text-decoration-none text-light" href="/task"> Kembali</a>
    </button>


    <div class="card rounded shadow mx-auto">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body p-4">
            <form action="/task" method="post">
                {{ csrf_field() }}
                <div class="form-group form mb-2">
                    <label for="">Judul Tugas </label>
                    <input type="text" class="form-control" name="task_name" required="required">
                </div>
                <div class="form-group form mb-2">
                    <label for="">Nama Pegawai</label>
                    <select class="form-control" name="pegawai" id="select" required="required">
                        @foreach ($data as $p)
                        <option value="{{$p->id}}">{{$p->pegawai_nama}} ({{$p->id}})</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group form">
                    <label for="">Tanggal</label>
                    <input type="datetime-local" class="form-control" name="tanggal" required="required">
                </div>
                <div class="form mt-3">
                    <input type="submit" class="form-control btn btn-success" value="Simpan Data">
                </div>

            </form>
        </div>
    </div>



@endsection

