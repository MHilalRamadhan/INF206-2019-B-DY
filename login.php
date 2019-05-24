<?php
// cek apakah form telah di submit
include("koneksi.php");
if (isset($_POST["submit"])) {

// form telah disubmit, proses data
// ambil nilai form
$username = htmlentities(strip_tags(trim($_POST["username"])));
$password = htmlentities(strip_tags(trim($_POST["password"])));

// siapkan variabel untuk menampung pesan error
$pesan_error="";
// cek apakah "username" sudah diisi atau tidak
if (empty($username)) {
$pesan_error .= "Username belum diisi <br>";
}
// cek apakah "password" sudah diisi atau tidak
if (empty($password)) {
$pesan_error .= "Password belum diisi <br>";
}

// filter dengan mysqli_real_escape_string
$username = mysqli_real_escape_string($link,$username);
$password = mysqli_real_escape_string($link,$password);
// generate hashing
$password_sha1 = sha1($password);

// cek apakah username dan password ada di tabel admin
$query = "SELECT * FROM tabel_login WHERE username = '$username' AND password = '$password_sha1'";

$result = mysqli_query($link,$query);
if(mysqli_num_rows($result) > 0 ) {
	session_start();
	$_SESSION["tes"]= $username;
	header("Location: index.html");
}else{
	// data tidak ditemukan, buat pesan error
$pesan_error .= "Username dan/atau Password tidak sesuai";
}

}
else {
// form belum disubmit atau halaman ini tampil untuk pertama
// berikan nilai awal untuk semua isian form
$pesan_error = "";
$username = "";
$password = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Login</title>
<link rel="stylesheet" type="text/css" href="styleok.css">
</head>
	<body>
		<div class="container">
	<h1>NELAYAN<br/>Partner Job</h1>
	<!--<h3>Nelayan Partner Job</h3>-->
<?php
// tampilkan error jika ada

if ($pesan_error !== "") {
echo "<div class=\"error\">$pesan_error</div>";
}
?>
	<div class="kotak_login">
	<form action="index.html" method="post">
	<fieldset>
		<legend>Login</legend>
	<p>
	<label for="username">Username : </label>
	<input type="text" name="username" id="username"
	value="<?php echo $username ?>">
	</p>
	<p>
	<label for="password">Password : </label>
	<input type="password" name="password" id="password"
	value="<?php echo $password?>">
	</p>
	<p>
	<input type="submit" name="submit" value="Log In" ></a>
	</p>
	<p>belum punya akun daftar <a href="register.php">disini</a></p></p>
	</fieldset>
	</form>
	</div>
	</body>
	</html>

<?php 
	if (isset($_POST['submit'])) {
		
     header("Location: index.html");
	}
?>