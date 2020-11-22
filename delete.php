<?php 
    $nrp = $_GET['nrp'];
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa");
    $query = mysqli_query($conn, "delete from mahasiswa where nrp='$nrp'");
    $result = mysqli_affected_rows($conn);
    if($result) {
        echo "<script> alert('Data Berhasil Dihapus'); window.location.replace('index.php'); </script>";
    } else {
        echo "<script> alert('Gagal Menghapus Data'); window.location.replace('index.php'); </script>";
    }
?>
