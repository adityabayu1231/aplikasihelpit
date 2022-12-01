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
        <h1>Data Penjualan</h1>
        <button class="btn btn-light btn-outline-danger"><a href="transaksi.php" style="color: black;">Entry Penjualan</a></button>
        <form action="" class="float-right">
            Pilih Tanggal<input type="date">
            <button class="btn btn-light btn-outline-danger">Tampil</button>
        </form><br><br>
        <table border="1" cellpadding="12">
            <tr>
                <th>&nbsp;No&nbsp;</th>
                <th>&nbsp;Tanggal&nbsp;</th>
                <th>&nbsp;Nama Barang&nbsp;</th>
                <th>&nbsp;Harga Jual&nbsp;</th>
                <th>&nbsp;Jumlah&nbsp;</th>
                <th>&nbsp;Total Harga&nbsp;</th>
                <th>&nbsp;Laba&nbsp;</th>
                <th>&nbsp;Opsi&nbsp;</th>
            </tr>
            <?php
            include "../koneksi.php";
            error_reporting(0);
            $c = mysqli_query($conn, "SELECT * FROM barang a JOIN transaksi b ON a.kode_brg=b.nama_brg");
            while ($r = mysqli_fetch_array($c)) {
                $total = $r['harga_jual'] * $r['jmlh_beli'];
                $laba = ($r['harga_jual'] - $r['modal']) * $r['jmlh_beli'];
            ?>
                <tr>
                    <td><?php echo $no = $no + 1; ?> </td>
                    <td>&nbsp;<?= $v['tgl_trans']; ?>&nbsp;</td>
                    <td>&nbsp;<?= $v['nama_brg']; ?>&nbsp;</td>
                    <td>&nbsp; Rp.<?= $v['harga_jual']; ?>&nbsp;</td>
                    <td>&nbsp;<?= $v['jmlh_beli']; ?>&nbsp;</td>
                    <td>&nbsp; Rp.<?= $total ?>&nbsp;</td>
                    <td>&nbsp; Rp.<?= $laba ?>&nbsp;</td>
                    <td><a href="index.php"><button class="btn btn-block btn-danger">Exit</button></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>