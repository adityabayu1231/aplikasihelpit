<?php
session_start();
if (empty($_SESSION['email']) or empty($_SESSION['password'])) {
    echo "<script>alert('Maaf, Untuk mengakses halaman ini Anda Harus LOGIN Terlebih Dahulu, Terima Kasih!');
    document.location='../login.php'</script>";
}
