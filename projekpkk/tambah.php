<?php

$conn = mysqli_connect("localhost","root","","nyambungphp");

if(isset($_POST["submit"])){
   $nama = $_POST["nama"];
   $umur = $_POST["umur"];
   $alamat = $_POST["alamat"];
   $jurusan = $_POST["jurusan"];

   $query = "INSERT INTO siswa VALUES
      ('','$nama','$umur','$alamat','$jurusan')";
   mysqli_query($conn,$query);

   if(mysqli_affected_rows($conn)>0){
      echo "berhasil";
   } else {
      echo "gagal";
      echo "<br>";
      echo mysqli_error($conn);
   }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Coba</title>
</head>
<body>
    <h1>Si Paling</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
             </li>
             <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur" required value="<?= $mhs["nama"]; ?>">>
             </li>
             <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required value="<?= $mhs["nama"]; ?>">>
             </li>
             <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["nama"]; ?>">>
             </li>
             <li>
                <button type="submit" name="submit">Tambah Data</button>
             </li>
    <button><a href = 'y.php'>Kembali</a></button>
</body>
</html>