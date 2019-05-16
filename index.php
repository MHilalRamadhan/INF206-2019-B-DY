<?php
  // periksa apakah user sudah login, cek kehadiran session name 
  // jika tidak ada, redirect ke login.php
  session_start();
  if (!isset($_SESSION["tes"])) {
     header("Location: login.php");
  }
  // buka koneksi dengan MySQL
     include("koneksi.php"); 
?>

<!DOCTYPE html>
<!--
Template Name: nelayan partner job
Author: Liza maiyuni, Melani mawaddah, M Hilal Ramadhan, Brigitta sandawiiwag samkakai
Author URI: http://www.nelayanpartnerjob.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Nelayan Partner Job</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +62 823 8941 1755</li>
        <li><i class="fa fa-envelope-o"></i>Nelayanpartnerjob@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="profil.php">klik<i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="about-us.html">About</a></li>
        <li><a href="tambahjob.php">Tambah job</a></li>
        
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/1.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
       <div id="logo" class="fl_left">
        <h1><a href="index.html">NELAYAN</a></h1>
        <p>Partner Job</p>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Cari Kerja</a>
            <ul>
              <li><a href="pages/daftarpelabuhan.html">Daftar Pelabuhan</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Peluang Kerja</a>
            <ul>
              <li><a href="pages/angkutikan.html">Mengangkut ikan</a></li>
              <li><a class="drop" href="#">Membersihkan</a>
                <ul>
                  <li><a href="pages/bersihkapal.html">Kapal</a></li>
                  <li><a href="pages/bersihikan.html">Ikan</a></li>
                  <li><a href="pages/bersihlainnya.html">Lainnya</a></li>
                </ul>
              </li>
              <li><a href="pages/pilahjenis.html">Memilah jenis ikan</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
     <article>
      <p class="heading">Selamat datang di</p>
      <h2 class="heading">nelayan partner job</h2>
      <p>adalah app yang membantu nelayan dalam mencari pekerja paruh waktu yang ingin bekerja dengannya dan membantu orang yang ingin mencari pekerjaan tambahan sebagai pekerja paruh waktu dengan nelayan.</p>
      <footer>
        <ul class="nospace inline pushright">
          
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <article class="one_third first">
      <p class="nospace font-xs">Informasi </p>
      <h4 class="font-x2 font-x3">Pelabuhan Perikanan</h4>
      <p>Memudahkan anda mencari pelabuhan perikanan yang terdekat dengan anda dengan informasi yang lebih detail.</p>
      <p class="btmspace-30">Serta mudah dalam mencari suatu pekerjaan sesuai dengan pengelompokan tempat.</p>
      <footer><a class="btn inverse" href="pages/daftarpelabuhan.html">Tampilkan lagi &raquo;</a></footer>
    </article>
    <article class="one_third"><a href="#"><img class="btmspace-30" src="images/demo/gallery/1.png" alt=""></a>
      <h4 class="heading">Pelabuhan Perikanan Lampulo</h4>
      <p>Jl. Sisingamangaraja Ujung no.16, Desa Lampulo, Kec. Kuta Alam, Kota Banda Aceh&hellip;</p>
      <p class="nospace"><a href="#">Read More &raquo;</a></p>
    </article>
    <article class="one_third"><a href="#"><img class="btmspace-30" src="images/demo/gallery/3.png" alt=""></a>
      <h4 class="heading">Pelabuhan Perikanan Ule Lheu</h4>
      <p>Ule lheu, meuraksa, Banda Aceh, Aceh&hellip;</p>
      <p class="nospace"><a href="#">Read More &raquo;</a></p>
    </article>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/2.png');">
  <article class="hoc container"> 
    <!-- ################################################################################################ -->
   <div class="group btmspace-30">
      <div class="fl_left" style="margin-right:10px;"><img src="images/demo/foto.png" alt=""></div>
      <div class="fl_left">
        <p class="nospace font-xs">Foto Salah Satu</p>
        <h3 class="heading">Team Nelayan Partner Job</h3>
      </div>
    </div>
        <blockquote>Nelayan partner job adalah aplikasi yang membantu para nelayan untuk mencari orang yang ingin bekerja dengannya dan akan memberi gaji sesuai kesepakatan, dan tentu aplikasi ini akan bermanfaat bagi orang yang ingin mencari pekerjaan tambahan dan yang mencari peluang lewat aplikasi ini.</blockquote>
    <em class="block btmspace-50 font-xs">Team Nelayan Partner job</em>
    <footer><a class="btn inverse" href="about-us.html">View More &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
   <div class="btmspace-50 center">
      <h2>Peluang Kerja</h2>
      <p>Inilah salah satu penjelasan tentang pekerjaan dengan nelayan</p>
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article class="excerpt"><a href="#"><img src="images/demo/gallery/bb.png" alt=""></a>
          <div class="excerpttxt">
            <h6 class="heading font-x1">Mengangkut Ikan</h6>
            <ul class="nospace inline pushright font-xs">
              
            </ul>
            <p>Saat nelayan tiba ke daratan, maka ikan yang telah diisi ke dalam keranjang akan di angkut dari kapal ke atas&hellip;</p>
            <p><a href="#">Read More &raquo;</a></p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="excerpt"><a href="#"><img src="images/demo/gallery/aa.png" alt=""></a>
          <div class="excerpttxt">
            <h6 class="heading font-x1">Memilah jenis ikan</h6>
            <ul class="nospace inline pushright font-xs">
              
            </ul>
            <p>Memilah jenis ikan sesuai dengan kategori, ukuran, dan sesuai permintaan nelayan tentang pemilahan ikan menurut&hellip;</p>
            <p><a href="#">Read More &raquo;</a></p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="excerpt"><a href="#"><img src="images/demo/gallery/cc.png" alt=""></a>
          <div class="excerpttxt">
            <h6 class="heading font-x1">Membersihkan kapal nelayan</h6>
            <ul class="nospace inline pushright font-xs">
              
            </ul>
            <p>Setelah nelayan pulang melaut mencari ikan, kapalnya pasti berantakan dan ini adalah jenis pekerjaan yang paling&hellip;</p>
            <p><a href="#">Read More &raquo;</a></p>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/3.png');">
  <article class="hoc container center"> 
    <!-- ################################################################################################ -->
    <h3 class="font-x3">Kemudahan anda tujuan kami</h3>
    <p class="btmspace-50">Menyediakan fitur lengkap tentang pelayanan dalam mencari partner kerja antara nelayan atau pekerja paruh waktu</p>
    <footer><a class="inherit" href="#"><i class="fa fa-play-circle fa-4x"></i></a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="three_quarter first">
      <h3 class="nospace">Informasi lebih lanjut </h3>
      <p class="nospace">Tentang Team Nelayan Partner Job, silakan klik tombol More Information disamping</p>
    </div>
    <footer class="one_quarter"><a class="btn" href="#">More Information &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/4.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="one_quarter first">
        <h6 class="title">Tujuan Nelayan Partner Job</h6>
        <p>Membantu tim nelayan yang membutuhkan pekerja paruh waktu yang bekerja dengannya.</p>
        <p>Membantu orang yang ingin mendapatkan pekerjaan sampingan sebagai pekerja paruh waktu dengan nelayan.</p>
      </div>
      <div class="one_quarter">
        <h6 class="title">Informasi team</h6>
        <ul class="nospace linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            Laboratorium Terpadu Universitas Syiah Kuala
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +62 823 8941 1755<br>
            +62 813 7053 2552</li>
          <li><i class="fa fa-fax"></i> +62 852 3016 6922<br> +62 812 3796 5745</li>
          <li><i class="fa fa-envelope-o"></i> nelayanpartnerjob@gmail.com</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Team Nelayan Partner Job</h6>
        <ul class="nospace linklist">
          <li><a href="#">Melani Mawaddah (1708107010011)</a></li>
          <li><a href="#">Liza Maiyuni    (1708107010032)</a></li>
          <li><a href="#">M.Hilal Ramadhan(1708107010064)</a></li>
          <li><a href="#">Brigitta Samkakai(1708107010067)</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Pembuatan Website Nelayan Partner Job</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <h6 class="nospace font-x1"><a href="#">Mulai dirancang:</a></h6>
              <time class="font-xs block btmspace-10" datetime="2019-01-16">Friday, 6<sup>th</sup> Februari 2019</time>
              <p class="nospace">Merancang software requirement sesuai kebutuhan dengan metode agile&hellip;</p>
            </article>
          </li>
          <li>
             <article>
              <h6 class="nospace font-x1"><a href="#">Mulai dibuat:</a></h6>
              <time class="font-xs block btmspace-10" datetime="2019-05-05">Thursday, 5<sup>th</sup> Maret 2045</time>
              <p class="nospace">Menerjemahkan software requirement ke dalam bahasa pemrograman&hellip;</p>
            </article>
          </li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Footer Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>