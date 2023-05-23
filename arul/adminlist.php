<?php
session_start();
  $koneksi = mysqli_connect("localhost","root","","adminarul");
  
  $hasil = mysqli_query($koneksi,"SELECT*FROM admin");
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
      <a href="projekpkk/index.php"><img src="gambar/logout.png" alt=""></a>
    </div>
  </div>
  <div class="tabel">
  <button><a href="adminadd.php">Tambah</a></button>
      <table border ="1">
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>No hp</th>
              <th>Email</th>
              <th>Poto</th>
              <th>Aksi</th>
          </tr>
              <?php
          foreach ($hasil as $ya){
        ?>
      <div class="list-produk">
        <tr>
        <td><?= $ya["id"];?></td>
        <td><?= $ya["nama"];?></td>
        <td><?= $ya["jenis_kelamin"];?></td>
        <td><?= $ya["alamat"];?></td>
        <td><?= $ya["no_hp"];?></td>
        <td><?= $ya["email"];?></td>
        <td><img src="<?=$ya["poto"]?>" width="100"></td>
        <td><a href="editadmin.php?id=<?=$ya["id"]; ?>">edit</a> |
        <a href="hapus.php?id=<?=$ya["id"]; ?>">hapus</a></td>
      </div>
      <?php
              }
      ?>
  </div>
</div>
</tr>
</table>
</body>
</html>