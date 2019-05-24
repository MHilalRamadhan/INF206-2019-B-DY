<?php
  $servername = "localhost";
$database = "stevedore job";
$username = "root";
$password = "";
// $password_sha1 = sha1($password);
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Klik nama nelayan untuk melihat profil lebih detail";


 $query = mysqli_query($conn,"SELECT * FROM tambahjob WHERE daftarpelabuhan = 'lampulo'");
    //$conn->query("SELECT * FROM tambahjob WHERE daftarpelabuhan = 'lampulo'");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Daftar pekerja</title>
  <link href="style.css" rel="stylesheet" >
  <style>
  body {
  background-color: #d5f0f3;
}
div.container {
  width: 1150px;
  padding: 10px 50px 20px;
  background-color: white;
  margin: 10px auto;
  box-shadow: 1px 1px 10px, -1px 1px 10px ;
}
h1,h2,h3 {
  text-align: center;
  font-family: Cambria, "Times New Roman", serif;
  clear: both;
}
#footer {
  text-align: right;
  margin-top: 20px;
}

/* =====HEADER===== */
#header {
  height: 60px;
}
#logo {
  font-size: 42px;
  float: left;
  text-shadow: 1px 2px #C0C0C0;
  margin-top: 10px; 
  margin-bottom: 0px;
  }
#logo span {
  color: green;
}
#tanggal{ 
  text-align: right;
}
hr {
  margin: 0px; 
}


/* ======TABLE====== */
table {
  border-collapse:collapse;
  border-spacing:0;
  border:1px black solid;
  width:100%
}
th, td {
  padding:8px 15px;
  border:1px black solid;
}
tr:nth-child(2n+3) {
  background-color: #F2F2F2;
}

/* ======PESAN====== */
.pesan {
  background-color: #C0FFA9;
  padding: 10px 15px;
  margin: 0 0 20px 0;
  border: 1px solid green;
  box-shadow: 1px 0px 3px green;
  text-align: center;
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

<div class="container">
<div id="header">
  <h1 id="logo">Pelabuhan Perikanan<span> Lampulo </span></h1>
  <p id="tanggal">

    <?php echo date("d M Y"); ?></p>
</div>
<hr>
<h2>Daftar Pekerjaan</h2>
 <table border="1">
  <tr>
              <th>NAMA NELAYAN</th>
              <th>NAMA PELABUHAN</th>
              <th>JUMLAH ORANG YANG DIBUTUHKAN</th>
              <th>JENIS PEKERJAAN</th>
              <th>KERANGAN JENIS PEKERJAAN LAINNYA</th>
              <th>GAJI/UPAH</th>
              <th>NO HP</th>
              <th>KETERANGAN NELAYAN</th>
              <th>TAMPILKAN PROFIL</th>

              </tr>
               <?php
      if(mysqli_num_rows($query)>0){
        while ($data = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $data['username']; ?></td>
      <td><?php echo $data['daftarpelabuhan']; ?></td>
      <td><?php echo $data['jumlah']; ?></td>
      <td><?php echo $data['jenis']; ?></td>
      <td><?php echo $data['keterangan']; ?></td>
      <td><?php echo $data['gaji']; ?></td>
      <td><?php echo $data['phoneNumber']; ?></td>
      <td><?php echo $data['Keterangannelayan']; ?></td>
      <td><a href="../tampilprofil.php" class="btn btn-danger">Buka Profil</a></td>
    </tr>
    <a href="#ModalDetail" id="'.$row['nim'].'|'.ucfirst(strtolower($row['nama'])).'|'.ucfirst(strtolower($row['tempat_lahir'])).'|'.$row['tanggal_lahir'].'|'.$row['jk'].'|'.ucfirst(strtolower($row['prodi'])).'|'.ucfirst(strtolower($row['jenjang'])).'"  data-toggle="modal"  class="detail-mahasiswa"><i class="fa fa-search"></i></a>
    <?php 
        }
      }
     ?>

        </table>
        <!-- Modal -->
        <div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-user"></span>&nbsp;Detail Nelayan</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <div class="modal-body" id="IsiModal">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-close"></span>Minta Kerja Sama</button>
                </div>
            </div>
          </div>
        </div>
        <!-- akhir kode modal dialog -->
  <div id="footer">
    Nelayan Partner Job
  </div>
</div>
      <script>
    $(document).ready(function() {
        // even ketika link a href diklik
        $('.detail-mahasiswa').on("click", function(){
        // ambil nilai id dari link detail simpan dalam var DataMahasiswa
        var DataNelayan= this.id;
        // Pecah DataMahasiswa dengan tanda | sebagai pemisah data hasilnya
        // disimpan dalam array datanya
        var datanya = DataNelayan.split("|");
        // Untuk pengujian data
        if (datanya[4]=='L') { var jk='Laki-laki';} else {var jk='Perempuan';}
        // bagian ini yang akan ditampilkan pada modal bootstrap
        // pengetikan HTML tidak boleh dienter, karena oleh javascript akan dibaca \r\n sehingga
        // modal bootstrap tidak akan jalan
        $("#IsiModal").html('<table width="100%" style="font-size:14px"><tr><td rowspan="7"><img src="<?php echo base_url('images/ozs.png');?>" class="rounded"></td></tr><tr><td width="150">No. Induk</td><td width="10">:</td><td>'+datanya[0]+'</td></tr><tr><td>Nama Lengkap</td><td>:</td><td>'+datanya[1]+'</td></tr><tr><td>Tempat, Tanggal  Lahir</td><td>:</td><td>'+datanya[2]+', '+datanya[3]+'</td></tr><tr><td>Jenis Kelamin</td><td>:</td><td>'+jk+'</td></tr><tr><td>Program Studi</td><td>:</td><td>'+datanya[5]+'</td></tr><tr><td>Jenjang</td><td>:</td><td>'+datanya[6]+'</td></tr></table>');
        });
   
    });
    </script>
</body>
</html>