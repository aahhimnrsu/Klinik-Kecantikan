<?php
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$instagram = $_POST['instagram'];
$hp = $_POST['hp'];
$tanggal = $_POST['tanggal'];
$member = $_POST['member'];
$paket = $_POST['paket'];
$diskon = $_POST['diskon'];
$potongan = 0;

switch($paket){
    case "PAKET CANTIK 1":
        if($member == "Member"){
            $potongan = 1000000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 500000 - $potongan;
        break;  
    
    case "PAKET CANTIK 2":
        if($member == "Member"){
            $potongan = 1500000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 1000000 - $potongan;
        break;
    
    case "PAKET CANTIK 3":
        if($member == "Member"){
            $potongan = 2000000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 1500000 - $potongan;
        break;
};

mysqli_query($db,"insert into tbshopping values('$nik','$nama','$alamat','$instagram','$hp','$tanggal','$member','$paket','$diskon')");

header('location:index.php');
?>