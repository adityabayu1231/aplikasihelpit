<?php
session_start();
if (empty($_SESSION['email']) or empty($_SESSION['password'])) {
    echo "<script>alert('Maaf, Untuk mengakses halaman ini Anda Harus LOGIN Terlebih Dahulu, Terima Kasih!');
    document.location='../login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Google-Style-Login.css">
</head>

<body style="background-color: #b3b3b3;">
    <div class="container">
        <h1>DATA BARANG</h1>
        <h3>Informasi Barang</h3>
        <br>
        <p>Uji Coba</p>
        <button class="btn btn-light btn-outline-danger"><a href="input.php" style="color: black;">Tambah Barang</a></button><br><br>
        <!-- <input type="submit" name="print" class="btn btn-dark" style="float:right"> -->
        <button class="btn btn-danger float-right"><a href="cetak.php" target="_blank" style="color: white;">PRINT</a></button>
        <form action="cari.php" method="get">
            <input type="text" name="cari" autofocus placeholder="Cari Barang..." autocomplete="off">
            <button type="submit" class="btn btn-danger" style="padding: 3px 13px 3px 13px;">Cari</button>
        </form>
        <br>
        <table border="1" cellpadding="12">
            <tr style="background-color: #1a66ff;">
                <th>&nbsp;No&nbsp;</th>
                <th>&nbsp;Nama Barang&nbsp;</th>
                <th>&nbsp;Harga Jual&nbsp;</th>
                <th>&nbsp;Jumlah&nbsp;</th>
                <th style="width: 700px;">&nbsp;Opsi&nbsp;</th>
            </tr>
            <?php
            include "../koneksi.php";
            error_reporting(0);
            $c = mysqli_query($conn, "SELECT * FROM barang");
            while ($r = mysqli_fetch_array($c)) {
            ?>
                <tr style="padding: 10px 5px 10px 5px; text-align: left;">
                    <td>&nbsp;<?= $no = $no + 1; ?></td>
                    <td>&nbsp;<?= $r['nama_brg']; ?></td>
                    <td>&nbsp;<?= $r['harga_jual']; ?></td>
                    <td>&nbsp;<?= $r['stok']; ?></td>
                    <td>&nbsp;<a href="detail.php"><button class="btn btn-danger" name="detail">Detail</button></a> | <a href="ubah.php?hal=edit&id=<?= $r['kode_brg'] ?>"><button class="btn btn-danger">Ubah</button></a> | <a href="delete.php?hal=hapus&id=<?= $r['kode_brg'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')"><button class="btn btn-danger">Hapus</button></a>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>