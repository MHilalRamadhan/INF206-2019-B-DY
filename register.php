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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nelayan Partner Job</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
ergdsfgds
	<h1>NELAYAN<br/>Partner Job</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Registrasi</p>

		<form action="" method="post">
			<label>Nama/Username</label>
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
			<input type="password" name="password" class="form_login" placeholder="Buat Password...">

			<label>Konfirmasi Password</label>
			<input type="password" name="konfirmasipassword" class="form_login" placeholder="Konfirmasi Password...">
			
			<input type="submit" class="tombol_login" name="submit" value="DAFTAR">

			<br/>
			<br/>
			<center>
				<a class="link" href="#"></a>
			</center>
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