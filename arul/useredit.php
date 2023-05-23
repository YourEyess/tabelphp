<?php
    //menangkap id dari halaman adminlist
  $tangkap = $_GET['id'];
  //koneksi
  $conn = mysqli_connect("localhost","root","","adminarul");
  //query ke tabel admin dengan where
  $query = mysqli_query($conn,"SELECT * FROM login where id_login = $tangkap");
  //fetch data 
  $tampil = mysqli_fetch_assoc($query);
  //jika tombol simpan di tekan 
  if(isset($_POST["submit"])){
    //menampung
    $a = htmlspecialchars($_POST["admin"]);
    $b = htmlspecialchars($_POST["username"]);
    $c = htmlspecialchars($_POST["showpass"]);
    $d = htmlspecialchars($_POST["level"]);

    //sql
    $sql = " UPDATE admin SET
    id_admin = '$a',
    username = '$b',
    password = '$e',
    showpass = '$c',
    level = '$d'
    where id_login = $tangkap";


    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
      echo"
      <script>
      alert ('data berhasil diupdate');
      document.location.href = 'userlist.php';
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
                <label for="">ID Admin : </label>
                <input type="text" name="admin" id="admin" value="<?= $tampil['id_admin']?>" required>
             </div>
             <div class="tabel-box">
                <label for="">Username : </label>
                <textarea name="username" id="username" required><?= $tampil['username']?></textarea>
             </div>
             <div class="tabel-box">
                <label for="">Password : </label>
                <input type="text" name="showpass" id="showpass" required value="<?= $tampil['showpass']?>">
             </div>
             <div class="tabel-box">
                <label for="">Level : </label>
                <input type="text" name="level" id="level" required value="<?= $tampil['level']?>">
             </div>
             <button style="background-color : white;" name="submit">Simpan</button>
                <a href="userlist.php">Kembali</a>
    </form>
  </div>
  </div>
</div>
</body>
</html>