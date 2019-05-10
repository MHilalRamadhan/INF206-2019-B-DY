<?php
$servername = "localhost";
$database = "stevedore job";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nelayan Part Time Job</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Tambah kriteria pekerja<br/>yang dibutuhkan</h1>

	<div class="kotak_login">
		<p class="tulisan_login">tambah job</p>

		<form>
			<label>Jenis pekerjaan</label>
			<input type="text" name="Jenis pekerjaan" class="form_login" placeholder="Jenis pekerjaan">

			<label>Alamat tempat nelayan</label>
			<input type="text" name="password" class="form_login" placeholder="Alamat">

			<input type="submit" class="tombol_login" value="TAMBAH">

			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.nelayanparttimejob.com">Lupa Sandi?</a>
			</center>
		</form>
		
	</div>


</body>
</html>