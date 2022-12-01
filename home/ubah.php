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
        <?php
        include "../koneksi.php";
        error_reporting(0);
        if (isset($_GET['hal'])) {
            if ($_GET['hal'] == "edit") {
                $tampil = mysqli_query($conn, "SELECT * FROM barang WHERE kode_brg = '$_GET[id]'");
                $r = mysqli_fetch_array($tampil);
                if ($r) {
                    $kd = $r['kode_brg'];
                    $nb = $r['nama_brg'];
                    $tgl = $r['tanggal'];
                    $jns = $r['jenis'];
                    $sp = $r['supl'];
                    $mdl = $r['modal'];
                    $hj = $r['harga_jual'];
                    $sk = $r['stok'];
                    $ss = $r['sisa'];
                }
            }
        }
        ?>
        <h1>Ubah Data Barang</h1>
        <form action="" method="post" enctype="multipart-form/data">
            Kode Barang <input type="text" name="kb" value="<?= $kd ?>" class="form-control" autocomplete="off">
            Nama Barang <input type="text" name="nb" value="<?= $nb ?>" class="form-control" autocomplete="off">
            Tanggal Masuk <input type="date" name="tgl" value="<?= $tgl ?>" class="form-control" autocomplete="off">
            Jenis <input type="text" name="jn" value="<?= $jns ?>" class="form-control" autocomplete="off">
            Supplier <input type="text" name="sp" value="<?= $sp ?>" class="form-control" autocomplete="off">
            Modal <input type="number" name="md" value="<?= $mdl ?>" class="form-control" autocomplete="off">
            Harga Jual <input type="number" name="hj" value="<?= $hj ?>" class="form-control" autocomplete="off">
            Stok <input type="number" name="sk" value="<?= $sk ?>" class="form-control" autocomplete="off">
            Sisa <input type="number" name="ss" value="<?= $ss ?>" class="form-control" autocomplete="off"><br>
            <button type="submit" name="simpan" class="btn btn-outline-primary btn-lg font-weight-bold">Simpan</button>
            <button type="reset" name="batal" class="btn btn-outline-danger btn-lg font-weight-bold"><a href="index.php" class="btn-outline-danger">Batal</a></button>
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
            mysqli_query($conn, "UPDATE barang SET kode_brg='$kd', nama_brg = '$nb', tanggal = '$tgl', jenis = '$jn', supl = '$sp', modal = '$md', harga_jual = '$hj', stok = '$sk', sisa = '$ss' WHERE barang.kode_brg ='$_GET[id]'");
            echo "<script>alert('Selamat, Data Sudah Diubah.');
            document.location='dbarang.php'</script>";
        }
        ?>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>