<?php
    //menangkap id dari halaman adminlist
  $tangkap = $_GET['id'];
  //koneksi
  $conn = mysqli_connect("localhost","root","","adminarul");
  //query ke tabel admin dengan where
  $query = mysqli_query($conn,"SELECT * FROM produk where no = $tangkap");
  //fetch data 
  $tampil = mysqli_fetch_assoc($query);
  //jika tombol simpan di tekan 
  if(isset($_POST["submit"])){
    //menampung
    $a = htmlspecialchars($_POST["nama"]);
    $b = htmlspecialchars($_POST["produk"]);
    $c = htmlspecialchars($_POST["harga"]);
    $d = htmlspecialchars($_POST["stok"]);
    $e = htmlspecialchars($_POST["exp"]);
    $f = htmlspecialchars($_POST["poto"]);
    //sql
    $sql = " UPDATE produk SET
    nama_produk = '$a',
    jenis_produk = '$b',
    harga_produk = '$c',
    stok = '$d',
    tnggal_exp = '$e',
    poto = '$f'
    where no = '$tangkap'";


    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
      echo"
      <script>
      alert ('data berhasil diupdate');
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
    <div class="sick">
    <h1>Update Data Admin</h1>
    </div>
    <form action="" method="post">
          <div class="tabel-box">
                <label for="">Nama Produk : </label>
                <input type="text" name="nama" id="nama" value="<?= $tampil['nama_produk']?>" required>
             </div>
             <div class="tabel-box">
                <label for="">Jenis Produk : </label>
                <input type="text" name="produk" id="produk" value="<?= $tampil['jenis_produk']?>" required>
             </div>
             <div class="tabel-box">
                <label for="">Harga Produk : </label>
                <textarea name="harga" id="harga" required><?= $tampil['harga_produk']?></textarea>
             </div>
             <div class="tabel-box">
                <label for="">Stok : </label>
                <input type="text" name="stok" id="stok" required value="<?= $tampil['stok']?>">
             </div>
             <div class="tabel-box">
                <label for="">Tanggal EXP : </label>
                <input type="text" name="exp" id="exp" required value="<?= $tampil['tnggal_exp']?>">
             </div>
             <div class="tabel-box">
                <label for="">Poto : </label>
                <input type="text" name="poto" id="poto" required value="<?= $tampil['poto']?>">
             </div>
             <button style="background-color : white;" name="submit">Simpan</button>
                <a href="produklist.php">Kembali</a>
    </form>
  </div>
  </div>
</div>
</body>
</html>