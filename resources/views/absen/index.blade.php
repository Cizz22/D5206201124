@extends('layout.app', ['title'=>'Absen','header' => 'Tabel Absen'])
@section('content')

        <a class="text-decoration-none text-light" href="absen/tambah"> <button class="btn btn-success">Tambah Absen Baru    </button></a>

	<br/>
	<br/>
    <form action="{{route('absen.search')}}" method="post">
        @csrf
        <div class="d-flex w-100 justify-content-start" style="gap: 10px">
        <input type="text" class="form-control w-25" name="cari" placeholder="Search.." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-primary" value="Search">
        </div>
	</form>
	<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($absen as $a)
            <tr>
                <td>{{ $a->pegawai_nama}}</td>
                <td>{{ $a->Tanggal }}</td>
                <td>{{ $a->Status=="H"?"Hadir":"Absen" }}</td>
                <td>
                    <div class="d-flex justify-content-center" style="gap: 10px">

                            <a class="text-decoration-none text-light" href="/absen/edit/{{ $a->ID}}" ><button class="btn btn-primary mr-2"> Edit </button></a>
                            <a class="text-decoration-none text-light" href="/absen/hapus/{{ $a->ID}}" ><button class="btn btn-danger mr-2"> Hapus </button></a>
                            <a class="text-decoration-none text-light" href="/absen/show/{{ $a->ID}}" ><button class="btn btn-secondary mr-2"> Detail </button></a>
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
        {{$absen->links()}}
    </div>

@endsection
