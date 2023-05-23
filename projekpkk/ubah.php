<?php
require 'function.php';

$id = $_GET["id"];

$mhs =  query("SELECT * FROM siswa WHERE id = $id")[0];

if(isset($_POST["submit"])){

if(ubah($_POST)>0) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'y.php';
        </script>";
} else {
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'y.php';
        </script>";
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
        <input type ="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
             </li>
             <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur" required value="<?= $mhs["umur"]; ?>">>
             </li>
             <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"]; ?>">>
             </li>
             <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">>
             </li>
             <li>
                <button type="submit" name="submit">Tambah Data</button>
             </li>
    <button><a href = 'y.php'>Kembali</a></button>
</body>
</html>