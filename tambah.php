<?php
    include 'koneksi.php';

    if(isset($_POST['tambah'])) {
        $nisn = $_POST ['nisn'];
        $nama = $_POST ['nama'];
        $jk = $_POST ['jenis_kelamin'];
        $kelas = $_POST ['kelas'];

        $sql = "INSERT INTO siswa (nisn, nama, jenis_kelamin, kelas) VALUES ('$nisn', '$nama', '$jk', '$kelas')";

        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('Location: tampildatasiswa.php');
        }else{
            header('Location: tambah.php?status=gagal');
        }
    }
?>