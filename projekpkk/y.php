<?php
//koneksi ke database
$conn = mysqli_connect ("localhost", "root","","nyambungphp");
//ambil data dari tabel siswa/query data siswa 
$result = mysqli_query ($conn, "select * from siswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Coba</title>
</head>
<body>
    <h1>Si Paling</h1>
<button><a href="tambah.php">Tambah Data Siswa</a></button>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>

    <td>Id</td>
    <td>Aksi</td>
    <td>Nama</td>
    <td>Umur</td>
    <td>Alamat</td>
    <td>Jurusan</td>

    </tr>
<?php $i = 1; ?>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href ="tambah.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('yakin?');">Ubah |</a>
            <a href ="hapus.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('yakin?');">Hapus</a>   
        </td>
        <td><?= $row ["nama"]; ?></td>
        <td><?= $row ["umur"]; ?></td>
        <td><?= $row ["alamat"]; ?></td>
        <td><?= $row ["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>
</table>



</body>
</html>