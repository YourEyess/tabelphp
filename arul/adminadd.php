<?php
  $conn = mysqli_connect("localhost","root","","adminarul");
  if(isset($_POST["submit"])){
    $a = $_POST["nama"];
    $b = $_POST["kelamin"];
    $c = $_POST["alamat"];
    $d = $_POST["hp"];
    $e = $_POST["email"];
    $f = $_POST["poto"];
    
    /*tampung file poto
    $aa = $_FILES["poto"]['nama'];
    $bb = $_FILES["poto"]['size'];
    $cc = $_FILES["poto"]['tmp_nama'];
    $dd = $_FILES["poto"]['error'];

    //setting gambar
    $ekstensipotovalid = ['jpg','jpeg','png'];
    $ambilesktensi = explode('.',$aa);
    $ekstensigambar = strtolower(end($ambilesktensi));
    if(in_array($ambilesktensi,$ekstensigpotovalid));
    header("localhost: adminlist.php");
    return false;
    }

    move_uploaded_file($cc,$aa);
    */

    $sql = " INSERT INTO admin VALUES
    (NULL,'$a','$b','$c','$d','$e','$f')";
    
    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
      echo"
      <script>
      alert ('data berhasil ditambahkan');
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
  <form action="" method="post" enctype="multipart/form-data">
    <div class="sick">
    <h1>Input Data Admin</h1>
    </div>
          <div class="tabel-box">
                <label for="">Nama : </label>
                <input type="text" name="nama" id="">
             </div>
             <div class="tabel-box">
                <label for="">Jenis Kelamin : </label>
                <select name="kelamin" id="">
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
             </div>
             <div class="tabel-box">
                <label for="">Alamat : </label>
                <textarea name="alamat" id="alamat"></textarea>
             </div>
             <div class="tabel-box">
                <label for="">No_HP : </label>
                <input type="text" name="hp" id="">
             </div>
             <div class="tabel-box">
                <label for="">Email : </label>
                <input type="text" name="email" id="">
             </div>
             <div class="tabel-box">
                <label for="">Poto : </label>
                <input type="text" name="poto" id="">
             </div>
             <button style="background-color : white;" name="submit">Simpan</button>
                <a href="adminlist.php">Kembali</a>
    </form>
  </div>
  </div>
</div>
</body>
</html>