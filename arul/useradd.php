<?php


$conn = mysqli_connect("localhost", "root", "", "adminarul");
$query = mysqli_query($conn, "select * from login");
$admin = mysqli_query($conn, "select * from admin");


?>
<?php
          if (isset($_POST['submit'])):
                    //tampung datanya
                    $id = $_POST['id_admin'];
                    $use = $_POST['username'];
                    $pass = $_POST['password'];
                    $level = $_POST['level'];

                    //enkripsi password
                    $pw = password_hash($pass,PASSWORD_DEFAULT);

                    //proses simpan
                    mysqli_query($conn,"INSERT INTO login VALUES (NULL,'$id','$use','$pw','$pass','$level')");
                    if (mysqli_affected_rows($conn)){
                              echo "
                              <script>
                               alert('Data Tersimpan');
                               document.location.href='userlist.php';
                              </script>
                              ";
                    }   
            endif
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
             <label for="">ID Admin</label>
                    <input type="text" name="id_admin">
             </div>
             <div class="tabel-box">
             <label for="">Username</label>
                    <input type="text" name="username">
             </div>
             <div class="tabel-box">
             <label for="">Password</label>
                    <input type="password" name="password">
             </div>
             <div class="tabel-box">
             <label for="">Level</label>
                    <select name="level" id="">
                              <option value="">Pilih Level</option>
                              <option value="1">Super Admin</option>
                              <option value="2">Admin</option>
                     </select>
             </div>
             <button style="background-color : white;" name="submit">Simpan</button>
             <a href="userlist.php">Kembali</a>
    </form>
  </div>
  </div>
</div>
</body>
</html>