<?php 
$tangkap = $_GET['id'];
$conn = mysqli_connect("localhost","root","","adminarul");
    if (mysqli_query($conn, "DELETE FROM login where id_login = $tangkap")>0){
        echo"
        <script>
        alert ('data berhasil dihapus');
        document.location.href = 'userlist.php';
        </script>";
    }
?>