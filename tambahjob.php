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
<body>
<link rel="stylesheet" href="styletj.css">

<div class="container">
            <form class="form-horizontal" role="form" action="" method="post">
                <h2>Tambah Job</h2>
                <div class="form-group">

                    <label>Username Nelayan</label>
                    <br>
                    <input type="text" name="username" class="form_login" placeholder="Username Nelayan...">
                    <br>
                    <br>
                    <label for="NamaPelabuhan" class="form_login">Nama Pelabuhan</label>
                    <br>
                    <select name="daftarpelabuhan" id="daftarpelabuhan">
                        <option>Pilih Daftar Pelabuhan Perikanan</option>
                        <option value="lampulo">Lampulo</option>
                        <option value="ulelheu">Ule lheu</option>
                        <option value="aluenaga">Alue naga</option>
                        <option value="gampongjawa">Gampong jawa</option>
                    </select>
                    <br>
                    <br>
                </div>
                
                
                <div class="form-group">
                    <label for="JlhPekerja" class="form_login">Jumlah Pekerja Yang Dibutuhkan</label>
                    <br>
                    
                    <select name="jumlah" id="jumlah">
                        <option>Jumlah</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        
                    </select>
                    <br>
                    <br>
                </div>
                <div class="form-group">
                    <label for="jnspekerjaan" class="form_login">Jenis Pekerjaan</label>
                    <br>
                    
                    <select name="jenis" id="jenis">
                        <option>Jenis Pekerjaan</option>
                        <option value="Mengangkutikan">Mengangkut Ikan</option>
                        <option value="Memilahjenisikan">Memilah Jenis Ikan</option>
                        <option value="Membersihkan">Membersihkan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <br>
                <br>
                <div class="form-group">
                        <label for="Height" class="form_login">Keterangan jenis lainnya</label>
                    <div class="col-sm-9">
                        <input type="text" name="keterangan" class="tambah_job" placeholder="Selain pilihan yang diatas">
                    </div>
                </div>

                </div>
                <br>
                <div class="form-group">
                    <label for="Gaji" class="form_login">Upah Per Jam</label>
                    <div class="form_login" >
                        <input type="text" name="gaji" class="tambah_job" placeholder="Jumlah Upah per Jam..">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="phoneNumber" class="form_login">Kontak </label>
                    <div class="col-sm-9">
                        <input type="text" name="phoneNumber" class="tambah_job" placeholder="No HP..">
                    </div>
                </div>
                <br>
                <div class="form-group">
                        <label for="Height" class="form_login">Keterangan Nelayan</label>
                    <div class="col-sm-9">
                        <input type="text" name="keterangannelayan" class="tambah_job" placeholder="Keterangan lain untuk Nelayan..">
                    </div>
                </div>
                <br>
                <!-- /.form-group -->

                <input type="submit" class="tombol_login" name="submit" value="TAMBAH">
            </form> <!-- /form -->
            <?php 
            if (isset($_POST['submit'])) {
                
                $conn->query("INSERT INTO tambahjob(username, daftarpelabuhan, jumlah, jenis, keterangan, gaji, phoneNumber, Keterangannelayan) VALUES('$_POST[username]', '$_POST[daftarpelabuhan]', '$_POST[jumlah]', '$_POST[jenis]', '$_POST[keterangan]', '$_POST[gaji]', '$_POST[phoneNumber]', '$_POST[keterangannelayan]')");    

            echo "<div class='btn btn-success'>";
            echo "Data disimpan";
            echo "</div>";
            }

            ?>
        </div> <!-- ./container -->
    </body>
</html>