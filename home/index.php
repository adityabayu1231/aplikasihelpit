<?php
session_start();
if (empty($_SESSION['email']) or empty($_SESSION['password'])) {
    echo "<script>alert('Maaf, Untuk mengakses halaman ini Anda Harus LOGIN Terlebih Dahulu, Terima Kasih!');
    document.location='../login.php'</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>CrowCodeAcademy</title>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">CrowCodeAcademy</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger text-white" href="?view=dash">DashBoard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="dbarang.php">Data Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="entry.php">Entry Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="../forgotpw.php">Ganti Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">EKSPLORE YOURSELF WITH <br> <span class="font-weight-bold">FRAMEWORK INDONESIA</span></h1>
            <hr class="my-4">
            <p class="lead">Tutorial FrameWork Website dalam bahasa Indonesia</p>
            <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
        </div>
    </div> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <?php
        error_reporting(0);
        if ($_GET['view'] == 'dash')
            include "dashboard.php";
        elseif ($_GET['view'] == 'barang')
            include "barang.php";
        elseif ($_GET['view'] == 'ubah')
            include "ubah.php";
        elseif ($_GET['view'] == 'hapus')
            include "delete.php";
        elseif ($_GET['view'] == 'transaksi')
            include "transaksi.php";
        ?>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/sd1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">EKSPLORE THE WORLD WITH <br> <span class="font-weight-bold">CrowCodeAcademy</span></h1>
                    <hr class="my-4">
                    <p class="lead">Selamat Datang Di Aplikasi Penjualan</p>
                    <a class="btn btn-primary btn-lg font-weight-bold" href="index.php" role="button">KUNJUNGI</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/sd2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">EKSPLORE TH WORLD WITH<br> <span class="font-weight-bold">CrowCodeAcademy</span></h1>
                    <hr class="my-4">
                    <p class="lead">Selamat Datang Di Aplikasi Penjualan</p>
                    <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/sd3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">EKSPLORE THE WORLD WITH<br> <span class="font-weight-bold">CrowCodeAcademy</span></h1>
                    <hr class="my-4">
                    <p class="lead">Selamat Datang Di Aplikasi Penjualan</p>
                    <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>