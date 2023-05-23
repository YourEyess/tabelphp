<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "adminarul");
$query = mysqli_query($conn, "select * from login");
$row = mysqli_fetch_assoc($query);

if (isset ($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");
        
        //cek username 
        if (mysqli_num_rows($result) === 1 ) {

            //cek password
            $row = mysqli_fetch_assoc($result);
             if ( password_verify($password, $row['password'] ) ) {
                $_SESSION["login"] = true;
                header ("location: ../adminlist.php");
                exit;
             }

        }
    $error = true;

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>form login</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
  </head>
  <body>
    <div class="kotak_login">
      <p class="tulisan_login">Silahkan login</p>
      <?php if ( isset ($error)) : ?>
        <p style="color : red";>username/password salah</p>
    <?php endif; ?> 

      <form action="" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username atau email .." />

        <label>Password</label>
        <input type="password" name="password" class="form_login" placeholder="Password .." />

        <input type="submit" name="submit" class="tombol_login" value="login" />

        <br />
        <br />
        <center>
          <a class="link" href="produk.php">Kembali</a>
        </center>
      </form>
    </div>
  </body>
</html>