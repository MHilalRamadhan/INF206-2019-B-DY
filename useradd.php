<?php
session_start();
if (isset($_POST['submit'])) {
//    disini anda menangkap variabel form, melakukan validasi dan menginsert ke database
//    dalam contoh ini saya tidak akan melakukan aksi tersebut dan aksi akan saya anggap berhasil
//    sebelum redirect ke tabel user, daftarkan session pesan
    $_SESSION['pesan'] = 'penambahan data berhasil';
    echo '<script>window.location="user.php"</script>';
}
?>
<!doctype html>
<html>
    <head>
        <title>Useradd - harviacode.com</title>
    </head>
    <body>
        <h2>Tambah User</h2>
        <form action="useradd.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input /></td>
                </tr>
                <tr>
                    <td>NRP</td>
                    <td><input /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Tambah" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>