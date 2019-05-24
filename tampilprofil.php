<?php
include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Profil</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="Profil">
		<b id="detail">Detail Profil User<i> <?php echo $login_session; ?></i></b></p>
		<b>Nama		: <?php echo $login_session; ?></b></p>
    <a class="form_login"></a>
		<b>Email	: <?php echo $email_session; ?></b></p>
		<b>No HP	: <?php echo $no_hp_session; ?></b></p>
		<b>alamat	: <?php echo $alamat_session; ?></b></p>
		<b>umur		: <?php echo $umur_session; ?></b></p>


	</div>
</body>
</html>