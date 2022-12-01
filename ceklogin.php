<?php
include "koneksi.php";
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$q = mysqli_query($conn, "SELECT * FROM login WHERE email='$user' AND password='$pass'");
$r = mysqli_fetch_array($q);

$cek = mysqli_num_rows($q);

if ($cek > 0) {
    $_SESSION['email'] = $user;
    $_SESSION['password'] = $pass;
    $_SESSION['level'] = $r['level'];

    header("location:home/index.php");
} else {
    echo "<script>alert('Maaf, Login Gagal, Email atau Password anda salah!');
    document.location='login.php'</script>";
}
