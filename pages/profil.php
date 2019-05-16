
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Profil </title>
  <link href="style.css" rel="stylesheet" >
  <link rel="icon" href="favicon.png" type="image/png" >
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
  <h1 id="logo">NELAYAN <span>Partner Job</span></h1>
  <p id="tanggal"><?php echo date("d M Y"); ?></p>
</div>
<hr>
<h2>Profil</h2>
 <table border="1">
  <tr>
  <th>Nama Nelayan</th>
  <th>MOTO</th>
  <th>GAMBAR</th>
  </tr>
  <?php
  // jalankan query
  $result = mysqli_query($link, $query);
  
  if(!$result){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  
  //buat perulangan untuk element tabel dari data mahasiswa
  while($data = mysqli_fetch_assoc($result))
  { 
    
    echo "<tr>";
    echo "<td>$data[nama]</td>";
    echo "<td>$data[moto]</td>";
    echo "<td><img style='width:200px' src=http://localhost/prak-pbw/folder-upload/$data[gambar]></td>";
    echo "</tr>";
  }
  
  // bebaskan memory 
  mysqli_free_result($result);
  
  // tutup koneksi dengan database mysql
  mysqli_close($link);
  ?>
  </table>
  <div id="footer">
   Nelayan Partner Job
  </div>
</div>
</body>
</html>