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
	<title>Nelayan Partner Job</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>NELAYAN<br/>Partner Job</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.stevedorejob.com">Lupa Sandi?</a>
			</center>
		</form>
		
		<?php 
			if (isset($_POST['submit'])) {
				
				$conn->query("INSERT INTO tabel_login VALUES('$_POST[nama]', '$_POST[password]')");	

			echo "<div class='btn btn-success'>";
			echo "Data disimpan";
			echo "</div>";
			}

		?>

	</div>


</body>
</html>