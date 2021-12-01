<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="text" name="idpegawai" pattern="[\d0-9]{0,}" maxlength="11" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		Status <input type="text" name="status" maxlength="1" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
