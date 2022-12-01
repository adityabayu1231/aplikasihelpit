<?php
        include "../koneksi.php";
        error_reporting(0);
        if (isset($_GET['hal'])) {
            if ($_GET['hal'] == "hapus") {
                $hapus = mysqli_query($conn, "DELETE FROM barang WHERE kode_brg = '$_GET[id]'");
                if ($hapus) {
                    echo "<script>alert('Hapus Data Sukses!'); document.location='dbarang.php';</script>";
                }
            }
        }
