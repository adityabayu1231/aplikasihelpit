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
        <h1>Detail Barang</h1>
        <table border="1" cellpadding="12">
            <tr>
                <th>&nbsp;No&nbsp;</th>
                <th>&nbsp;Kode Barang&nbsp;</th>
                <th>&nbsp;Nama Barang&nbsp;</th>
                <th>&nbsp;Tanggal&nbsp;</th>
                <th>&nbsp;Jenis&nbsp;</th>
                <th>&nbsp;Supplier&nbsp;</th>
                <th>&nbsp;Modal&nbsp;</th>
                <th>&nbsp;Harga Jual&nbsp;</th>
                <th>&nbsp;Stok&nbsp;</th>
                <th>&nbsp;Sisa&nbsp;</th>
                <th style="width: 700px;">&nbsp;Opsi&nbsp;</th>
            </tr>
            <?php
            include "../koneksi.php";
            error_reporting(0);
            $detail = $_GET['detail'];
            $c = mysqli_query($conn, "SELECT * FROM barang WHERE kode_brg = kode_brg ");
            while ($r = mysqli_fetch_array($c)) {
            ?>
                <tr style="padding: 10px 5px 10px 5px; text-align: left;">
                    <td>&nbsp;<?= $no = $no + 1; ?></td>
                    <td>&nbsp;<?= $r['kode_brg']; ?></td>
                    <td>&nbsp;<?= $r['nama_brg']; ?></td>
                    <td>&nbsp;<?= $r['tanggal']; ?></td>
                    <td>&nbsp;<?= $r['jenis']; ?></td>
                    <td>&nbsp;<?= $r['supl']; ?></td>
                    <td>&nbsp;<?= $r['modal']; ?></td>
                    <td>&nbsp;<?= $r['harga_jual']; ?></td>
                    <td>&nbsp;<?= $r['stok']; ?></td>
                    <td>&nbsp;<?= $r['sisa']; ?></td>
                    <td>&nbsp;<a href="dbarang.php"><button class="btn btn-danger" name="detail">Detail</button></a> | <a href="ubah.php"><button class="btn btn-danger">Ubah</button></a> | <a href="delete.php"><button class="btn btn-danger">Hapus</button></a>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>