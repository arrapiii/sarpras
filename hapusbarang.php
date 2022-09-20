<?php
    include 'koneksi.php';

    $kodebar = $_GET['kode_barang'];

    $sql = "DELETE FROM barang WHERE kode_barang='$kodebar'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: tampildatabarang.php');
    }else{
        header('Location: hapusbarang.php?status=gagal');
    }
?>