<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body style="background-color: #b3b3b3;">
    <div class="container">
        <br>
        <div class="card-header bg-danger text-white">
            Ganti Password
        </div>
        <form action="" method="post" enctype="multipart-form/data">
            Password Lama<input type="text" class="form-control" autocomplete="off" name="oldpwd" required><br>
            Password Baru<input type="text" class="form-control" autocomplete="off" name="newpwd" required><br>
            Konfirmasi Password<input type="text" class="form-control" autocomplete="off" name="confpwd" required><br>
            <button type="submit" name="simpan" class="btn btn-outline-danger btn-lg btn-block font-weight-bold">Simpan</button>
        </form>
        <?php
        include "koneksi.php";
        if (isset($_POST['simpan'])) {
            $oldpwd = $_POST['oldpwd'];
            $newpwd = $_POST['newpwd'];
            $confpwd = $_POST['confpwd'];
            mysqli_query($conn, "UPDATE `login` SET `password` = '$newpwd' WHERE `login`.`password` = '$oldpwd'");
            echo "<script>alert('Selamat, Password Anda Telah Diperbaharui');
            document.location='login.php'</script>";
        }
        ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>