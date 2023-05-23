<?php
//koneksi ke database
$conn = mysqli_connect ("localhost", "root","","nyambungphp");

function query ($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $row;
}
    function tambah($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $umur = htmlspecialchars($data["umur"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        $query = "INSERT INTO siswa VALUES
        ('','$nama','$umur','$alamat','$jurusan')";
     mysqli_query($conn,$query);

     return mysqli_affected_rows($conn);
    }

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $umur = htmlspecialchars($data["umur"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "UPDATE siswa SET 
                nama = '$nama',
                umur = '$umur',
                alamat = '$alamat',
                jurusan = '$jurusan'
                WHERE id = $id";

    mysqli_query ($conn,$query);

    return mysqli_affected_rows($conn);
}
?>
