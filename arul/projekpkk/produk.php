<?php
  $koneksi = mysqli_connect("localhost","root","","pkk_arul");
?>
<?php
  $hasil = mysqli_query($koneksi,"SELECT*FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"></meta>
	<meta content="width=device-widh, initialscale=1.0" name="viewport"></meta>
    <meta name="viewport" content="width=device-width, initiscale=1.0" />
    <meta http-equiv="X-UA-Compatle" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <link href="navbar.css" rel="stylesheet"></link>
	<link href="https://fonts.gstatic.com" rel="preconnect"></link>
	<link href="https://fonts.googleapis.com/cssfamily=Poppins:ital,wght@0,400;0,500;0,700;1,600&amp;display=swap" rel="stylesheet"></link>
    <title>Web Amrulloh</title>
  </head>
  <body>
	<nav class="nav">
		<div class="nav-area">
			<a class="brand" href="">
				<span>Webサイト</span>
			</a>

			<svg class="nav-burger" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>

			<div class="nav-menu">
				<a href="index.php">家</a>
				<a href="#">製品について</a>
        <a href="detail.php">詳細</a>
			</div>
			<div class="nav-menu-dekstop">
				<a href="formlogin.html">ログインする</a>
			</div>
		</div>
		
	</nav>
  <img src ="../gambar/banner2.png" width="1423px">
    </div>
    <div class="badan">
        <h2 style="text-align:center"> Produk</h3>
        <?php

          foreach ($hasil as $ya){
        ?>
        <div class="list-produk">
            <img src="../gambar/<?= $ya["image"];?>">
 
            <h4><?= $ya["nama"];?></h4>
            <h5><?= $ya["harga"];?></h5>
 
            <a class="tombol tombol-detail" href="detail.php">Detail</a> 
            <a class="tombol tombol-beli" href="https://api.whatsapp.com/send?phone=6281280671121">Beli</a>
            </div>
            <?php
              }
              ?>
            </div>
          </div>
      </div>
    </div>
  </body>
  <div class="footer">
        Copyright by Amrulloh
     </div>
</html>