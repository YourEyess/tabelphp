<?php
    //menangkap id dari halaman adminlist
  $tangkap = $_GET['id'];
  //koneksi
  $conn = mysqli_connect("localhost","root","","adminarul");
  //query ke tabel admin dengan where
  $query = mysqli_query($conn,"SELECT * FROM admin where id = $tangkap");
  //fetch data 
  $tampil = mysqli_fetch_assoc($query);
  //jika tombol simpan di tekan 
  if(isset($_POST["submit"])){
    //menampung
    $a = htmlspecialchars($_POST["nama"]);
    $b = htmlspecialchars($_POST["kelamin"]);
    $c = htmlspecialchars($_POST["alamat"]);
    $d = htmlspecialchars($_POST["hp"]);
    $e = htmlspecialchars($_POST["email"]);
    $f = htmlspecialchars($_POST["poto"]);
    
    //sql
    $sql = " UPDATE admin SET
    nama = '$a',
    jenis_kelamin = '$b',
    alamat = '$c',
    no_hp = '$d',
    email = '$e',
    poto = '$f'
    where id = $tangkap";


    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
      echo"
      <script>
      alert ('data berhasil diupdate');
      document.location.href = 'adminlist.php';
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
                <label for="">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $tampil['nama']?>" required>
             </div>
             <div class="tabel-box">
                <label for="">Jenis Kelamin : </label>
                <select name="kelamin" id="kelamin" required>
                  <option selected="<?= $tampil['jenis_kelamin']?>"><?= $tampil['jenis_kelamin']?></option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
             </div>
             <div class="tabel-box">
                <label for="">Alamat : </label>
                <textarea name="alamat" id="alamat" required><?= $tampil['alamat']?></textarea>
             </div>
             <div class="tabel-box">
                <label for="">No_HP : </label>
                <input type="text" name="hp" id="hp" required value="<?= $tampil['no_hp']?>">
             </div>
             <div class="tabel-box">
                <label for="">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $tampil['email']?>">
             </div>
             <div class="tabel-box">
                <label for="">Poto : </label>
                <input type="text" name="poto" id="poto" required value="<?= $tampil['poto']?>">
             </div>
             <button style="background-color : white;" name="submit">Simpan</button>
                <a href="adminlist.php">Kembali</a>
    </form>
  </div>
  </div>
</div>
</body>
</html>