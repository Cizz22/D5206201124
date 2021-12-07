@extends('layout.app', ['title'=>'Tugas','header' => 'Tabel Tugas'])
@section('content')
<a class="text-decoration-none text-light" href="{{route('task.create')}}"> <button class="btn btn-success">Tambah Tugas Baru    </button></a>
	<br/>
	<br/>

	<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Judul Tugas</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $p)
		<tr>
			<td>{{ $p->NamaTugas }}</td>
			<td>{{ $p->pegawai->pegawai_nama }} ({{ $p->pegawai->pegawai_id }})</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
                <div class="d-flex">
                    <a class="text-decoration-none text-light" href="/absen/edit/{{ $p->ID}}" ><button class="btn btn-primary mr-2"> Edit </button></a>
                    <a class="text-decoration-none text-light" href="/absen/hapus/{{ $p->ID}}" ><button class="btn btn-danger mr-2"> Hapus </button></a>
                </div>
			</td>
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
