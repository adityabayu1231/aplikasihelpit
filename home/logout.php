<?php
session_start();
session_destroy();

echo "<script>alert('Anda telah keluar dari halaman Admin!');
    document.location='../login.php'</script>";
