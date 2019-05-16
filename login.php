
<?php
// cek apakah form telah di submit
include("koneksi.php");
if (isset($_POST["submit"])) {

// form telah disubmit, proses data
// ambil nilai form
$nama = htmlentities(strip_tags(trim($_POST["nama"])));
$password = htmlentities(strip_tags(trim($_POST["password"])));

// siapkan variabel untuk menampung pesan error
$pesan_error="";
// cek apakah "username" sudah diisi atau tidak
if (empty($nama)) {
$pesan_error .= "Nama belum diisi <br>";
}
// cek apakah "password" sudah diisi atau tidak
if (empty($password)) {
$pesan_error .= "Password belum diisi <br>";
}

// filter dengan mysqli_real_escape_string
$nama = mysqli_real_escape_string($link,$nama);
$password = mysqli_real_escape_string($link,$password);
// generate hashing
$password_sha1 = sha1($password);

// cek apakah username dan password ada di tabel admin
$query = "SELECT * FROM tabel_login WHERE nama = '$nama' AND password = '$password_sha1'";

$result = mysqli_query($link,$query);
if(mysqli_num_rows($result) > 0 ) {
	session_start();
	$_SESSION["tes"]= $nama;
	header("Location: index.php");
}else{
	// data tidak ditemukan, buat pesan error
$pesan_error .= "Nama dan/atau Password tidak sesuai";
}

}
else {
// form belum disubmit atau halaman ini tampil untuk pertama
// berikan nilai awal untuk semua isian form
$pesan_error = "";
$nama = "";
$password = "";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nelayan Partner Job</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>NELAYAN<br/>Partner Job</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form>
			<label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama ..">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
			

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<p>belum punya akun daftar <a href="register.php">disini</a></p></p>
			</center>
		</form>
		
		

	</div>


</body>
</html>