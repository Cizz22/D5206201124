@extends('layout.app', ['title'=>'Tugas','header' => 'Tabel Tugas'])
@section('content')
<a class="text-decoration-none text-light" href="{{route('task.create')}}"> <button class="btn btn-success">Tambah Tugas Baru    </button></a>
	<br/>
	<br/>

    <form action="{{route('task.search')}}" method="post">
        @csrf
        <div class="d-flex w-100 justify-content-start" style="gap: 10px">
        <input type="text" class="form-control w-25" name="cari" placeholder="Search.." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-primary" value="Search">
        </div>
	</form>

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
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
                <div class="d-flex" style="gap: 10px">
                    <a class="text-decoration-none text-light" href="/task/{{ $p->ID}}/edit" ><button class="btn btn-primary mr-2"> Edit </button></a>
                    <a class="text-decoration-none text-light" href="/task/delete/{{ $p->ID}}" ><button class="btn btn-danger mr-2"> Hapus </button></a>
                    <a class="text-decoration-none text-light" href="/task/{{ $p->ID}}" ><button class="btn btn-secondary mr-2"> Detail </button></a>
                </div>
			</td>
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
