@extends('layout.app',  ['title' => 'Pegawai','header' => 'Tabel Pegawai'])


@section('content')
<a class="text-decoration-none text-light" href="{{route('pegawai.create')}}"> <button class="btn btn-success">Tambah Pegawai Baru    </button></a>
	<br/>
	<br/>

	<form action="{{route('pegawai.search')}}" method="post">
        @csrf
        <div class="d-flex w-100 justify-content-start" style="gap: 10px">
        <input type="text" class="form-control w-25" name="cari" placeholder="Search.." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-primary" value="Search">
        </div>
	</form>
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
            @forelse($data as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <div class="d-flex" style="gap: 10px">
                    <a class="text-decoration-none text-light" href="/pegawai/{{ $p->pegawai_id}}/edit" ><button class="btn btn-primary mr-2"> Edit </button></a>
                    <a class="text-decoration-none text-light" href="{{route('pegawai.hapus', $p->pegawai_id)}}" ><button class="btn btn-danger mr-2"> Hapus </button></a>
                    <a class="text-decoration-none text-light" href="{{route('pegawai.show', $p->pegawai_id)}}" ><button class="btn btn-secondary mr-2"> Detail </button></a>
                </div>

			</td>
		</tr>
        @empty
        <td colspan="5">
            <div class="d-flex justify-content-center">
                <p>Data Belum tersedia</p>
            </div>

        </td>
		@endforelse
        </tbody>

	</table>
    <div class="d-flex justify-content-center">
        {{$data->links()}}
    </div>


@endsection
