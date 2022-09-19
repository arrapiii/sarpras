<?php
    include 'koneksi.php';

    if(isset($_POST['ubah'])) {
        $nisn = $_POST ['nisn'];
        $nama = $_POST ['nama'];
        $jk = $_POST ['jenis_kelamin'];
        $kelas = $_POST ['kelas'];

        $sql = "UPDATE siswa SET nisn='$nisn', nama='$nama', jenis_kelamin ='$jk', kelas='$kelas' WHERE nisn='$nisn'";

        $query = mysqli_query($connect, $sql);

        if($query) {
            header('Location:tampildatasiswa.php');
        }else{
            header('Location:ubah.php?status=gagal');
        }
    }
?>