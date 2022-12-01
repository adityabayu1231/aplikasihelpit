<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Barang</title>
</head>
<body>
    <h1>Ini Contoh Printnya Walau Eror</h1>
    <table border="1" cellpadding="12">
            <tr>
                <th>&nbsp;No&nbsp;</th>
                <th>&nbsp;Nama Barang &nbsp;</th>
                <th>&nbsp;Harga Jual &nbsp;</th>
                <th>&nbsp;Jumlah &nbsp;</th>
                <th>&nbsp;Opsi&nbsp;</th>
            </tr></table>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
