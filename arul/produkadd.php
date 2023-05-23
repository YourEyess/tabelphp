<?php
  $conn = mysqli_connect("localhost","root","","adminarul");
  if(isset($_POST["submit"])){
    $a = $_POST["nama_produk"];
    $b = $_POST["jenis_produk"];
    $c = $_POST["harga_produk"];
    $d = $_POST["stok"];
    $e = $_POST["tnggal_exp"];
    $f = $_POST["poto"];

    $sql = " INSERT INTO produk VALUES
    (NULL,'$a','$b','$c','$d','$e','$f')";

    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
      echo"
      <script>
      alert ('data berhasil ditambahkan');
      document.location.href = 'produklist.php';
      </script>";  
    }
    else{
      mysqli_error($conn);
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- My style -->
  <link rel="stylesheet" href="style.css">
  <title>Administrator</title>
</head>
<body>
  
<div class="container">
  <div class="sidebar">
     <div class="header">
      <img src="cat.png" alt="">
     </div>
     <div class="main">
     <div class="list-item">
      <a href="userlist.php">User</a>
     </div>
     <div class="list-item">
      <a href="adminlist.php">Admin</a>
     </div>
     <div class="list-item">
          <a href="produklist.php">Produk</a>
         </div>
     <div class="list-item">
          <a href="">Pesanan</a>
        </div>
     </div>
  </div>
  <div class="main-content">
    <div class="nav">
      <div class="left-menu">
          <h1>WEB PKK</h1>
      <Span class="judul">Dashboard</Span>
    </div>
    <div class="right-menu">
      <a href="projekpkk/index.php"><img src="logout.png" alt=""></a>
    </div>
  </div>
  <div class="content">
    <div class="box">
  <form action="" method="post">
    <div class="sick">
    <h1>Input Data Admin</h1>
    </div>
          <div class="tabel-box">
                <label for="">Nama Produk : </label>
                <input type="text" name="nama_produk" id="">
             </div>
             <div class="tabel-box">
                <label for="">Jenis Produk : </label>
                <input type="text" name="jenis_produk" id="">
             </div>
             <div class="tabel-box">
                <label for="">Harga Produk : </label>
                <input type="text" name="harga_produk" id="">
             </div>
             <div class="tabel-box">
                <label for="">stok : </label>
                <input type="text" name="stok" id="">
             </div>
             <div class="tabel-box">
                <label for="">Tanggal EXP : </label>
                <input type="text" name="tnggal_exp" id="">
             </div>
             <div class="tabel-box">
                <label for="">Poto : </label>
                <input type="text" name="poto" id="">
             </div>
             <button style="background-color : white;" name="submit">Simpan</button>
                <button type="submit" name="submit">Kembali</button>
    </form>
  </div>
  </div>
</div>
</body>
</html>