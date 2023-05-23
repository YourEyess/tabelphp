<?php
session_start();
  $koneksi = mysqli_connect("localhost","root","","adminarul");
?>
<?php
  $hasil = mysqli_query($koneksi,"SELECT*FROM login");
   if ( !isset($_SESSION["login"]) ) {
    header ("location: login.php");
    exit;
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
  <div class="tabel">
  <button><a href=useradd.php>Tambah</a></button>
      <table border ="1">
          <tr>
              <th>id_login</th>
              <th>id_admin</th>
              <th>username</th>
              <th>password</th>
              <th>level</th>
              <th>aksi</th>
          </tr>
              <?php

          foreach ($hasil as $ya){
        ?>
      <div class="list-produk">
        <tr>
        <td><?= $ya["id_login"];?></td>
        <td><?= $ya["id_admin"];?></td>
        <td><?= $ya["username"];?></td>
        <td><?= $ya["showpass"];?></td>
        <td><?= $ya["level"];?></td>
        <td><a href="useredit.php?id=<?=$ya["id_login"]; ?>">edit</a> |
        <a href="hapus2.php?id=<?=$ya["id_login"]; ?>">hapus</a></td>
      </div>
      <?php
              }
      ?>
  </div>
</div>
</div>
</tr>
</table>
</body>
</html>