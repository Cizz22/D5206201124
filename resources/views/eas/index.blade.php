@extends('layout.app',  ['title' => 'Keranjang Belanja','header' => 'Tabel Keranjang belanja'])


@section('content')
<a class="text-decoration-none text-light" href="/eas/tambah"> <button class="btn btn-success">Beli </button></a>
	<br/>
	<br/>
	<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Kode Pembelian</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Jumlah Pembelian</th>
                <th scope="col">Harga per item</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($belanja as $p)
		<tr>
			<td>{{ $p->ID}}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah}}</td>
			<td>{{ 'Rp. ' . number_format($p->Harga, '0', '', '.')  }}</td>
            <td>{{ 'Rp. ' . number_format(($p->Jumlah* $p->Harga), '0', '', '.') }}</td>
			<td>
                <div class="d-flex" style="gap: 10px">
                    <a class="text-decoration-none text-light" href="/eas/hapus{{$p->ID}}" ><button class="btn btn-danger mr-2">Batal</button></a>
                </div>

			</td>
		</tr>
        @empty
        <td colspan="6">
            <div class="d-flex justify-content-center">
                <p>Keranjang kosong</p>
            </div>

        </td>
		@endforelse
        </tbody>

	</table>
    <div class="d-flex justify-content-center">
        {{$belanja->links()}}
    </div>


@endsection
