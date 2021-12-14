@extends('layout.app', ['title'=>'Praktikum','header' => 'Tabel Snack'])
@section('content')

        <a class="text-decoration-none text-light" href="/snack/tambah"> <button class="btn btn-success">Tambah Absen Baru    </button></a>

	<br/>
	<br/>
    <form action="{{route('snack.search')}}" method="post">
        @csrf
        <div class="d-flex w-100 justify-content-start" style="gap: 10px">
        <input type="text" class="form-control w-25" name="cari" placeholder="Search.." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-primary" value="Search">
        </div>
	</form>
	<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Merk Snack</th>
                <th scope="col">Stock Snack</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($snack as $a)
            <tr>
                <td>{{ $a->merksnack}}</td>
                <td>{{ $a->stocksnack }}</td>
                <td>{{ $a->tersedia=="Y"?"Tersedia":"Habis" }}</td>
                <td>
                    <div class="d-flex justify-content-start" style="gap: 10px">

                            <a class="text-decoration-none text-light" href="/snack/edit/{{ $a->kodesnack}}" ><button class="btn btn-primary mr-2"> Edit </button></a>
                            <a class="text-decoration-none text-light" href="/snack/hapus/{{ $a->kodesnack}}" ><button class="btn btn-danger mr-2"> Hapus </button></a>
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
        {{$snack->links()}}
    </div>

@endsection
