<?php

include 'koneksi.php';

$idnya = $_POST['idnya'];
$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "insert into request (idnya, nama, tipe, harga) values('$idnya', '$nama', '$tipe', '$harga')");

header("location:request.php");
?>
