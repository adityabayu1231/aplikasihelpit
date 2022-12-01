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
    <?php
    include "../koneksi.php";
    error_reporting(0);
    $tampil = mysqli_query($conn, "SELECT * FROM barang WHERE kode_brg='$_GET[id]'");
    $r = mysqli_fetch_array($tampil);
    ?>
    <div class="container">
        <h1>Entry Penjualan</h1>
        <form action="" method="post" class="multipart-form/data">
            Id Beli<input type="text" name="ib" value="<?php echo $r['kode_brg']; ?>" class="form-control" readonly=""></p>
            Tanggal<input type="date" name="tgl" id="" class="form-control"></p>
            Nama Pelanggan<select name="np" class="form-control">
                <option value="" hidden="">Pilih Pelanggan</option>
                <?php
                include "../koneksi.php";
                error_reporting(0);
                $tampil = mysqli_query($conn, "SELECT * FROM barang");
                while ($r = mysqli_fetch_array($tampil)) {
                ?>
                    <option value="<?= $r['supl']; ?>"><?= $r['supl']; ?></option>
                <?php } ?>
            </select>
            Nama Barang<select name="brg" class="form-control">
                <option value="" hidden="">Pilih Barang</option>
                <?php
                include "../koneksi.php";
                error_reporting(0);
                $tampil = mysqli_query($conn, "SELECT * FROM barang");
                while ($r = mysqli_fetch_array($tampil)) {
                ?>
                    <option value="<?= $r['kode_brg']; ?>"><?= $r['nama_brg']; ?></option>
                <?php } ?>
            </select>
            Jumlah Beli <input type="text" name="jb" id="" class="form-control"></p>
            <button name="simpan" class="btn btn-outline-danger btn-block">Simpan</button>
        </form>
        <?php
        include "../koneksi.php";
        error_reporting(0);
        if (isset($_POST['simpan'])) {
            $tgl = $_POST['tgl'];
            $np = $_POST['np'];
            $brg = $_POST['brg'];
            $jb = $_POST['jb'];
            mysqli_query($conn, "INSERT INTO transaksi VALUES('','$tgl','$np','$brg','$jb')");
            mysqli_query($conn, "UPDATE barang SET sisa = sisa -'$jb' WHERE kode_brg='$_POST[brg]'");
            echo "<script>alert('Selamat, Data Sudah Diubah.');
            document.location='dbarang.php'</script>";
        }
        ?>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>