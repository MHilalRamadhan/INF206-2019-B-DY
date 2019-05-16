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

<link rel="stylesheet" href="styletj.css">

<div class="container">
            <form class="form-horizontal" role="form">
                <h2>Tambah Job</h2>
                <div class="form-group">
                    <label for="NamaPelabuhan" class="col-sm-3 control-label">Nama Pelabuhan</label>
                    <br>
                    
                    <select name="daftarpelabuhan" id="daftarpelabuhan">
                        <option>Pilih Daftar Pelabuhan Perikanan</option>
                        <option value="lampulo">Lampulo</option>
                        <option value="ulelheu">Ule lheu</option>
                        <option value="aluenaga">Alue naga</option>
                        <option value="gampongjawa">Gampong jawa</option>
                    </select>
                    
                    <br>
                </div>
                
                
                <div class="form-group">
                    <label for="JlhPekerja" class="col-sm-3 control-label">Jumlah Pekerja Yang Dibutuhkan</label>
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
                </div>
                <div class="form-group">
                    <label for="jnspekerjaan" class="col-sm-3 control-label">Jenis Pekerjaan</label>
                    <br>
                    
                    <select name="jenis" id="jumlah">
                        <option>Jenis Pekerjaan</option>
                        <option value="Mengangkutikan">Mengangkut Ikan</option>
                        <option value="Memilahjenisikan">Memilah Jenis Ikan</option>
                        <option value="Membersihkan">Membersihkan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>

                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Keterangan jenis lainnya</label>
                    <div class="col-sm-9">
                        <input type="Keterangan" id="height" placeholder="Keterangan" class="form-control">
                    </div>
                </div>

                </div>
                <div class="form-group">
                    <label for="Gaji" class="col-sm-3 control-label">Gaji Per Jam</label>
                    <div class="col-sm-9">
                        <input type="Gaji" id="Gaji" placeholder="Rp." class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Kontak </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Keterangan Nelayan</label>
                    <div class="col-sm-9">
                        <input type="Keterangannelayan" id="height" placeholder="Keterangan" class="form-control">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            </form> <!-- /form -->
            <?php 
            if (isset($_POST['submit'])) {               
                $conn->query("INSERT INTO tambahjob VALUES('$_POST[daftarpelabuhan]', '$_POST[jumlah]', '$_POST[jenis]', '$_POST[Keterangan]', '$_POST[Gaji]', '$_POST[phoneNumber]', '$_POST[Keterangan]', '$_POST[Keterangannelayan]' )");    
            echo "<div class='btn btn-success'>";
            echo "Data disimpan";
            echo "</div>";
            }
        ?>
        </div> <!-- ./container -->
</html>