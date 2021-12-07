@extends('layout.app',  ['title' => 'Pegawai','header' => 'Tabel Pegawai'])


@section('content')
<a class="text-decoration-none text-light" href="{{route('pegawai.create')}}"> <button class="btn btn-success">Tambah Pegawai Baru    </button></a>
	<br/>
	<br/>

	<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <div class="d-flex">
                    <a class="text-decoration-none text-light" href="/absen/edit/{{ $p->pegawai_id}}" ><button class="btn btn-primary mr-2"> Edit </button></a>
                    <a class="text-decoration-none text-light" href="/absen/hapus/{{ $p->pegawai_id}}" ><button class="btn btn-danger mr-2"> Hapus </button></a>
                </div>

			</td>
		</tr>
		@endforeach
        </tbody>

	</table>

@endsection
