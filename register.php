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
	
	<link rel="stylesheet" type="text/css" href="styleok.css">
</head>
<body>

	<h1>NELAYAN<br/>Partner Job</h1>

	<div class="kotak_login">
		<fieldset>
		<legend>Registrasi</legend>

		<form action="register.php" method="post">
			<label>Nama/Username</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama/username...">
			</p>
			<p>
			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email...">
			</p>
			<p>
			<label>No HP</label>
			<input type="int" name="no_hp" class="form_login" placeholder="No HP...">
			</p>
			<p>
			<label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="Alamat...">
			</p>
			<p>
			<label>Umur</label>
			<input type="int" name="umur" class="form_login" placeholder="Umur...">
			</p>
			<p>
			<label>Jenis Kelamin</label>
			</p>
			<p>
			<select name="jk" class="form_login" id="jk">
                <option>Pilih Jenis Kelamin</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        	</p>
            <p>
			<label>Buat Password</label>
			<input type="password" name="password" class="form_login" placeholder="Buat Password...">
			</p>
			<p>
			<label>Konfirmasi Password</label>
			<input type="password" name="konfirmasipassword" class="form_login" placeholder="Konfirmasi Password...">
			</p>
			<p>
			<input type="submit" class="tombol_login" name="submit" value="DAFTAR">
			</p>
			<br/>
			<br/>
			<center>
				<p>sudah punya akun masuk <a href="login.php">disini</a></p></p>
			</center>

		</form>
	</fieldset>
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