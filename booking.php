<?php
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$instagram = $_POST['instagram'];
$hp = $_POST['hp'];
$tanggal = $_POST['tanggal'];
$member = $_POST['member'];
$perawatan = $_POST['perawatan'];
$diskon = $_POST['diskon'];
$potongan = 0;

switch($perawatan){
    case "I2PL WHITENING REJUVE":
        if($member == "Member"){
            $potongan = 450000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 450000 - $potongan;
        break;  
    
    case "I2PL ACNE":
        if($member == "Member"){
            $potongan = 405000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 405000 - $potongan;
        break;
    
    case "I2PL ACNE DAN WHITENING":
        if($member == "Member"){
            $potongan = 585000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 585000 - $potongan;
        break;

    case "LASER ACNE":
        if($member == "Member"){
            $potongan = 405000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 405000 - $potongan;
        break;

    case "LASER WHITENING":
        if($member == "Member"){
            $potongan = 405000 * 0.25;
        }else{
            $potongan = 0;
        }
        $diskon = 405000 - $potongan;
        break;
}


mysqli_query($db,"insert into tbbooking values('$nik','$nama','$alamat','$instagram','$hp','$tanggal','$member','$perawatan','$diskon')");

header('location:index.php');
?>