<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idnya = $_POST['idnya'];
$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];

// update data ke database
mysqli_query($koneksi, "UPDATE request SET idnya='$idnya', nama='$nama', tipe='$tipe', harga='$harga' where idnya='$idnya'");

header("location:request.php");
?>
