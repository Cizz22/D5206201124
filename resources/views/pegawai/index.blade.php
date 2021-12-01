@extends('app',  ['title' => 'Pegawai','header' => 'Tabel Pegawai'])


@section('content')
    <button class="btn btn-success">
        <a class="text-decoration-none text-light" href="{{route("pegawai.create")}}">Tambah Pegawai Baru</a>
    </button>
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
                    <button class="btn btn-primary mr-2">
                        <a class="text-decoration-none text-light" href="{{route("pegawai.edit", $p->id)}}">Edit</a>
                    </button>
                    <button class="btn btn-danger">
                        <a class="text-decoration-none text-light" href="{{route("pegawai.hapus", $p->id)}}">Hapus</a>
                    </button>
                </div>

			</td>
		</tr>
		@endforeach
        </tbody>

	</table>

@endsection
