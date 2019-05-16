<?php

$servername = "localhost";
$database = "stevedore job";
$username = "root";
$password = "";
$password_sha1 = sha1($password);
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
<meta charset="UTF-8">
<title>Form Login</title>
<style>
body{
	font-family: sans-serif;
	background: #d5f0f3;
}

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

button {
            background-color: gray;
            border-radius: 20%;
            width: 100px;
            height: 30px;
            margin-top: 10px;
            margin-right: 120px;
        }
        
label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
</style>
</head>
<body>
<div class="container">
<h1>Selamat Datang</h1>
<?php
// tampilkan error jika ada
if ($pesan_error !== "") {
echo "<div class=\"error\">$pesan_error</div>";
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
		<p class="tulisan_login">Silahkan Registrasi</p>
<form action="daftar.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Form Daftar</legend>
<p>
<<label>Nama/Username</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama/username...">

			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email...">

			<label>No HP</label>
			<input type="int" name="no_hp" class="form_login" placeholder="No HP...">

			<label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="Alamat...">

			<label>Umur</label>
			<input type="int" name="umur" class="form_login" placeholder="Umur...">

			<label>Jenis Kelamin</label>
			<br>
			<br>
			<select name="jk" id="jk">
                <option>Pilih Jenis Kelamin</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <br>
            <br>
			<label>Buat Password</label>
			<input type="text" name="password" class="form_login" placeholder="Buat Password...">

			<label>Konfirmasi Password</label>
			<input type="text" name="konfirmasipassword" class="form_login" placeholder="Konfirmasi Password...">
			
</p>
<p>
<input type="submit" name="submit" value="Daftar">
</p>
<br><br><hr>
<p>sudah punya akun log in <a href="login.php">disini</a></p>
</fieldset>
</form>
		<?php 
			if (isset($_POST['submit'])) {
				
				$conn->query("INSERT INTO tabel_login VALUES('$_POST[nama]', '$_POST[email]', '$_POST[no_hp]', '$_POST[alamat]', '$_POST[umur]', '$_POST[jk]', '$_POST[password]', '$_POST[konfirmasipassword]' )");	

			echo "<div class='btn btn-success'>";
			echo "Data disimpan";
			echo "</div>";
			}

		?>
</div>
</body>
</html>