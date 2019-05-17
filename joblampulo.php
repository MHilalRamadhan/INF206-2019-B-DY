<?php
  include "koneksi.php";

  $query = mysqli_query($conn,"SELECT * FROM tambahjob WHERE daftarpelabuhan = 'lampulo'");
    // $conn->query("SELECT * FROM tambahjob WHERE daftarpelabuhan = 'lampulo'");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Daftar pekerja</title>
  <link href="style.css" rel="stylesheet" >
  <style>
  body {
  background-color: #F8F8F8;
}
div.container {
  width: 960px;
  padding: 10px 50px 20px;
  background-color: white;
  margin: 20px auto;
  box-shadow: 1px 0px 10px, -1px 0px 10px ;
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
  <h1 id="logo">Daftar pekerjaan dengan<span> Nelayan </span></h1>
  <p id="tanggal">

    <?php echo date("d M Y"); ?></p>
</div>
<hr>
<h2>Daftar Pekerjaan</h2>
 <table border="1">
  <tr>
  <th>NAMA PELABUHAN</th>
  <th>JUMLAH ORANG YANG DIBUTUHKAN</th>
  <th>JENIS PEKERJAAN</th>
  <th>GAJI/UPAH</th>
  <th>NO HP</th>
  <th>KETERANGAN NELAYAN</th>
  </tr>
    <?php
      if(mysqli_num_rows($query)>0){
        while ($data = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $data['daftarpelabuhan']; ?></td>
      <td><?php echo $data['jumlah']; ?></td>
      <td><?php echo $data['jenis']; ?></td>
      <td><?php echo $data['keterangan']; ?></td>
      <td><?php echo $data['gaji']; ?></td>
      <td><?php echo $data['phoneNumber']; ?></td>
      <td><?php echo $data['Keterangannelayan']; ?></td>
    </tr>
    <?php 
        }
      }
     ?>
  </table>
  <div id="footer">
    Nelayan Partner Job
  </div>
</div>
</body>
</html>