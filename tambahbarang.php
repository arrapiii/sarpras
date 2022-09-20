<?php
    include 'koneksi.php';

    if(isset($_POST['tambah'])) {
        $kodebar = $_POST ['kode_barang'];
        $namabar = $_POST ['nama_barang'];
        $satuanbar = $_POST ['satuan_barang'];
        $jumlahbar = $_POST ['jumlah_barang'];

        $sql = "INSERT INTO barang (kode_barang, nama_barang, satuan_barang, jumlah_barang) VALUES ('$kodebar', '$namabar', '$satuanbar', '$jumlahbar')";

        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('Location: tampildatabarang.php');
        }else{
            header('Location: tambahbarang.php?status=gagal');
        }
    }
?>