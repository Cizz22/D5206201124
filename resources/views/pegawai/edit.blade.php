<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/{{$data->id}}" method="post">
		@csrf
        @method("PUT")
		Nama <input type="text" name="nama" required="required" value="{{$data->pegawai_nama}}"> <br/>
		Jabatan <input type="text" name="jabatan" required="required" value="{{$data->pegawai_jabatan}}"> <br/>
		Umur <input type="number" name="umur" required="required" value="{{$data->pegawai_umur}}"> <br/>
		Alamat <textarea name="alamat" required="required"> {{$data->pegawai_alamat}}" </textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
