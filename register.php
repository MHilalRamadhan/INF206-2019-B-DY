<?php
$servername = "localhost";
$database = "stevedore job";
$username = "root";
$password = "";
$email    = "email";
$alamat   = "alamat";
$umur     = "umur";
$jeniskelamin = "jeniskelamin";
$konfirmasipassword = "";


// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $database, $username,  $password, $email, $alamat, $umur, $jeniskelamin, $konfirmasipassword, );
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

	<h1>NELAYAN<br/>Partner Job</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Registrasi</p>

		<form>
			<label>Nama/Username</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama/username...">

			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email...">

			<label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="Alamat...">

			<label>Umur</label>
			<input type="text" name="umur" class="form_login" placeholder="Umur...">

			<label>Jenis Kelamin</label>
			<input type="text" name="email" class="form_login" placeholder="Jenis Kelamin...">

			<label>Buat Password</label>
			<input type="text" name="password" class="form_login" placeholder="Buat Password...">

			<label>Konfirmasi Password</label>
			<input type="text" name="konfirmasipassword" class="form_login" placeholder="Konfirmasi Password...">

			<input type="submit" class="tombol_login" value="DAFTAR">

			<br/>
			<br/>
			<center>
				<a class="link" href="#"></a>
			</center>
		</form>
		
	</div>


</body>
</html>