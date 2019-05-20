<?php
include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Profil</title>
	<style>
body {
background-color: #d5f0f3;
}
div.container {
width: 380px;
padding: 10px 50px 80px;
background-color: white;
margin: 20px auto;
box-shadow: 1px 0px 10px, -1px 0px 10px ;
}
h1,h3 {
text-align: center;
font-family: Cambria, "Times New Roman", serif;
}
p {
margin:0;
}
fieldset {
padding:20px;
width: 240px;
margin: auto;
}


label {
width:80px;
float:left;
margin-right:10px;
}
.error {
background-color: #FFECEC;
padding: 10px 15px;
margin: 0 0 20px 0;
border: 1px solid red;
box-shadow: 1px 0px 3px red ;
}
</style>
</head>
<body>
	<div id="Profil">
		<b id="detail">Detail Profil User<i> <?php echo $login_session; ?></i></b></p>
		<b>Nama		: <?php echo $login_session; ?></b></p>
		<b>Email	: <?php echo $email_session; ?></b></p>
		<b>No HP	: <?php echo $no_hp_session; ?></b></p>
		<b>alamat	: <?php echo $alamat_session; ?></b></p>
		<b>umur		: <?php echo $umur_session; ?></b></p>


	</div>
</body>
</html>