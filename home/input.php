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
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Google-Style-Login.css">
</head>

<body style="background-color: #b3b3b3; font-size: 20px;">
    <form action="" method="post" enctype="multipart-form/data">
        <h1>Form Barang</h1>
        Kode Barang <input type="text" name="kb" class="form-control" autocomplete="off">
        Nama Barang <input type="text" name="nb" class="form-control" autocomplete="off">
        Tanggal Masuk <input type="date" name="tgl" class="form-control" autocomplete="off">
        Jenis <input type="text" name="jn" class="form-control" autocomplete="off">
        Supplier <input type="text" name="sp" class="form-control" autocomplete="off">
        Modal <input type="number" name="md" class="form-control" autocomplete="off">
        Harga Jual <input type="number" name="hj" class="form-control" autocomplete="off">
        Stok <input type="number" name="sk" class="form-control" autocomplete="off">
        Sisa <input type="number" name="ss" class="form-control" autocomplete="off"><br>
        <button type="submit" name="simpan" class="btn btn-outline-danger btn-lg font-weight-bold">Simpan</button>
        <button type="reset" name="batal" class="btn btn-outline-danger btn-lg font-weight-bold"><a href="index.php" style="color: black;">Batal</a></button>
    </form>

    <?php
    include "../koneksi.php";
    if (isset($_POST['simpan'])) {
        $kb = $_POST['kb'];
        $nb = $_POST['nb'];
        $tgl = $_POST['tgl'];
        $jn = $_POST['jn'];
        $sp = $_POST['sp'];
        $md = $_POST['md'];
        $hj = $_POST['hj'];
        $sk = $_POST['sk'];
        $ss = $_POST['ss'];
        mysqli_query($conn, "INSERT INTO barang VALUES('$kb','$nb','$tgl','$jn','$sp','$md','$hj','$sk','$ss')");
        echo "<script>alert('Selamat, Data Inputan Anda Sudah Disimpan.');
            document.location='dbarang.php'</script>";
    }
    ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>