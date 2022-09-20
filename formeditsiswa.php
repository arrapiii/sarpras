<?php
    include 'koneksi.php';

    $nisn = $_GET['nisn'];
    $sql = "SELECT * FROM siswa WHERE nisn='$nisn'";
    $query = mysqli_query($connect, $sql);
    $sis = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1) {
        die ("Data tidak ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <!-- css -->
    <link rel="stylesheet" href="tambah.css">
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
            <a href="tampildatabarang.php">Data Barang Sarpras</a>
        </div>
    <div class="card">
        <form action="ubah.php" method="post">
            <h3><b>TAMBAH DATA SISWA</b></h3>
            <table class="table">
                <tr>
                    <td>NISN</td>
                    <td><input value="<?php echo $sis['nisn']?>" type="number" required="required" name="nisn"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input value="<?php echo $sis['nama']?>" type="text" required="required" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input value="<?php echo $sis['jenis_kelamin']?>" type="text" required="required" name="jenis_kelamin"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input value="<?php echo $sis['kelas']?>" type="text" required="required" name="kelas"></td>
                </tr>
            </table>
            <input type="submit" name="ubah" value="ubah" class="submit">
        </form>
    </div>
     <!-- footer -->
     <div class="footer">
        <h2>JIKA SUDAH MEMINJAM BARANG DIHARAPKAN <br>DIJAGA DENGAN BAIK DIKEMBALIKAN DENGAN <br>KONDISI YANG AMAN SEPERTI SEMULANYA. <br>SEKIAN TERIMA KASIH</h2>
    </div>
</body>
</html>