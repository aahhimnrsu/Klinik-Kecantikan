<?php
//koneksi database include 'koneksi.php';
include 'koneksi.php';
//menangkap data id yang di kirim dari url
$nik= $_GET['nik'];

//menghapus data dari database
mysqli_query($db,"delete from tbshopping where nik='$nik'");

//mengalihkan halaman kembali ke tampil_data.php header("location:index.php");
header("location:datashopping.php")

?>