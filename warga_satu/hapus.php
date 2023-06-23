<?php 
include 'koneksi.php';
$nik = $_GET['nik'];
mysqli_query($conn,"DELETE FROM warga1 WHERE nik='$nik'")or die(mysqli_error());
 
header("location:index.php?pesan=hapus");
?>