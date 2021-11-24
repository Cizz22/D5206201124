@extends('app')
@section('content')
    <button class="btn btn-success">
        <a class="text-decoration-none text-light" href="{{route('task.create')}}">Tambah Tugas Baru</a>
    </button>
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
			<td>{{ $p->task_name }}</td>
			<td>{{ $p->pegawai->pegawai_nama }} ({{ $p->pegawai->id }})</td>
			<td>{{ $p->tanggal }}</td>
			<td>{{ $p->status }}</td>
			<td>
                <div class="d-flex">
                    <button class="btn btn-primary mr-2">
                        <a class="text-decoration-none text-light" href="{{route('task.edit', $p->id)}}" >Edit</a>
                    </button>
                    <button class="btn btn-danger">
                        <a class="text-decoration-none text-light" href="{{route('task.hapus', $p->id)}}" >Hapus</a>
                    </button>
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
