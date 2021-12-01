<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}"> <br/>
		ID Pegawai <input type="text" name="idpegawai" pattern="[\d0-9]{0,}" maxlength="11"
         required="required {{ $a->IDPegawai }}"> <br/>
         Tanggal <input type="datetime-local" name="tanggal" required="required" {{ $a->Tanggal }}> <br/>
         Status <input type="text" name="status" maxlength="1" required="required" {{ $a->Status }}> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
