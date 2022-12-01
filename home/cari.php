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
    <title>Pencaharian</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Google-Style-Login.css">
</head>

<body style="background-color: #b3b3b3;">
    <div class="container">
        <button class="btn btn-danger"><a href="dbarang.php" style="color: white;">Kembali</a></button>
        <br>
        <table border="1" cellpadding="12">
            <tr>
                <th>&nbsp;No&nbsp;</th>
                <th>&nbsp;Nama Barang&nbsp;</th>
                <th>&nbsp;Harga Jual&nbsp;</th>
                <th>&nbsp;Jumlah&nbsp;</th>
                <th style="width: 700px;">&nbsp;Opsi&nbsp;</th>
            </tr>
            <?php
            include "../koneksi.php";
            error_reporting(0);
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $data = mysqli_query($conn, "SELECT * FROM barang WHERE nama_brg LIKE '%" . $cari . "%'");
                echo "<b>Hasil Pencarian : " . $cari . "</b>";
            }
            while ($w = mysqli_fetch_array($data)) {
            ?>
                <tr style="padding: 10px 5px 10px 5px; text-align: left;">
                    <td>&nbsp;<?= $no = $no + 1; ?></td>
                    <td>&nbsp;<?= $w['nama_brg']; ?></td>
                    <td>&nbsp;<?= $w['harga_jual']; ?></td>
                    <td>&nbsp;<?= $w['stok']; ?></td>
                    <td>&nbsp;<button class="btn btn-danger">Detail</button> | <button class="btn btn-danger">Edit</button> | <button class="btn btn-danger">Hapus</button></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>