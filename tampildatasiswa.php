<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <!-- css -->
    <link rel="stylesheet" href="siswa.css">
    <!-- font quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand:wght@300;400&family=Roboto+Mono&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="header-sidebar">
            <p>Peminjaman Barang Sarpras</p>
        </div>
        <div class="list-sidebar">
            <a href="tampildatasiswa.php">Data Siswa</a></div>
        <div class="list-sidebar1">
            <a href="">Data Barang Sarpras</a>
        </div>
    </div>
    <table border="1px">
        <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($connect, $sql);
            while($sis = mysqli_fetch_array($query)) {
                echo "
                <tr>
                <td>$sis[0]</td>
                <td>$sis[1]</td>
                <td>$sis[2]</td>
                <td>$sis[3]</td>
                <td>
                    <a href='formeditsiswa.php?nisn=".$sis['nisn']."'>Edit</a>
                    <a href='hapus.php?nisn=".$sis['nisn']."'>Hapus</a>
                </td>
                </tr>";
            }
        ?>
    </table>
    <div class="btn">
        <a href="siswa.html">Tambah Data</a>
    </div>
    <!-- footer -->
    <div class="footer">
        <h2>JIKA SUDAH MEMINJAM BARANG DIHARAPKAN <br>DIJAGA DENGAN BAIK DIKEMBALIKAN DENGAN <br>KONDISI YANG AMAN SEPERTI SEMULANYA. <br>SEKIAN TERIMA KASIH</h2>
    </div>
</body>
</html>