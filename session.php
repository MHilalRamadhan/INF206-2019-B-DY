<?php
include 'koneksi.php';

session_start();
$user_check=$_SESSION['profil_user'];
$sql2="select * from tabel_login where username='$user_check'";
$ses_sql=mysqli_query($connection, $sql2);

$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['username'];
$email_session=$row['email'];
$no_hp_session=$row['No HP'];
$alamat_session=$row['alamat'];
$umur_session=$row['jeniskelamin'];


?>

4