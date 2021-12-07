@extends('layout.app', ['title'=>'Abses','header' => 'Tabel Absen'])
@section('content')

        <a class="text-decoration-none text-light" href="absen/tambah"> <button class="btn btn-success">Tambah Absen Baru    </button></a>

	<br/>
	<br/>

	<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Pegawai</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($absen as $a)
            <tr>
                <td>{{ $a->pegawai_id}}</td>
                <td>{{ $a->pegawai_nama}}</td>
                <td>{{ $a->Tanggal }}</td>
                <td>{{ $a->Status=="H"?"Hadir":"Absen" }}</td>
                <td>
                    <div class="d-flex justify-content-center">

                            <a class="text-decoration-none text-light" href="/absen/edit/{{ $a->ID}}" ><button class="btn btn-primary mr-2"> Edit </button></a>
                            <a class="text-decoration-none text-light" href="/absen/hapus/{{ $a->ID}}" ><button class="btn btn-danger mr-2"> Hapus </button></a>
                    </div>
                </td>
            </tr>
            @empty
            <td colspan="5">
                <div class="mx-auto">
                    <p>Data Belum tersedia</p>
                </div>

            </td>
		</tr>
		@endforelse
        </tbody>

	</table>

@endsection
