<?php
    include 'koneksi.php';

    $nisn = $_GET['nisn'];

    $sql = "DELETE FROM siswa WHERE nisn='$nisn'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: tampildatasiswa.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
?>