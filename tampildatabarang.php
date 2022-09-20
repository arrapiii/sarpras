<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <!-- css -->
    <link rel="stylesheet" href="dataa.css">
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
    </div>
    <table border="1px">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan Barang</th>
            <th>Jumlah Barang</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM barang";
            $query = mysqli_query($connect, $sql);
            while($bar = mysqli_fetch_array($query)) {
                echo "
                <tr>
                <td>$bar[0]</td>
                <td>$bar[1]</td>
                <td>$bar[2]</td>
                <td>$bar[3]</td>
                <td>
                    <button> <a href='formeditbarang.php?kode_barang=".$bar['kode_barang']."'>Edit</a> </button>
                    <button> <a href='hapusbarang.php?kode_barang=".$bar['kode_barang']."'>Hapus</a> </button>
                </td>
                </tr>";
            }
        ?>
    </table>
    <div class="btn">
        <a href="barang.html">Tambah Data</a>
    </div>
    <!-- footer -->
    <div class="footer">
        <h2>JIKA SUDAH MEMINJAM BARANG DIHARAPKAN <br>DIJAGA DENGAN BAIK DIKEMBALIKAN DENGAN <br>KONDISI YANG AMAN SEPERTI SEMULANYA. <br>SEKIAN TERIMA KASIH</h2>
    </div>
</body>
</html>