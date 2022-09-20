<?php
    include 'koneksi.php';

    if(isset($_POST['ubah'])) {
        $kodebar = $_POST ['kode_barang'];
        $namabar = $_POST ['nama_barang'];
        $satuanbar = $_POST ['satuan_barang'];
        $jumlahbar = $_POST ['jumlah_barang'];

        $sql = "UPDATE barang SET kode_barang ='$kodebar', nama_barang ='$namabar', satuan_barang ='$satuanbar', jumlah_barang = '$jumlahbar' WHERE kode_barang='$kodebar'";

        $query = mysqli_query($connect, $sql);

        if($query) {
            header('Location:tampildatabarang.php');
        }else{
            header('Location:ubahbarang.php?status=gagal');
        }
    }
?>