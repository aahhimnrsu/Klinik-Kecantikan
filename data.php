<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data</title>
    <link rel="stylesheet" href="stylebook.css">
</head>
<body>
    <div class="all">
        <div class="header">
            <h1>DATA PEMESANAN PERAWATAN</h1>
        </div>

        <div class="crud-ui">
            <div class="btn-header">
                <p align=center>
                <a href="data.php"><button class="btnperawatan">DATA PEMESANAN PERAWATAN</button></a>
                <a href="index.php"><button class="btnhome">HOME</button></a>
                <a href="datashopping.php"><button class="btnpembelian">DATA PEMBELIAN PRODUK</button></a>
                </p>
            </div>
            <table border="1" class="tabel-data">
                <tr style="text-align: center;">
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Instagram</th>
                    <th>No. Handphone</th>
                    <th>Tanggal</th>
                    <th>Member</th>
                    <th>Perawatan</th>
                    <th>Total</th>
                    <th>Opsi</th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($db,"select * from tbbooking");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nik'];?></td>
                        <td><?php echo $d['nama'];?></td>
                        <td><?php echo $d['alamat'];?></td>
                        <td><?php echo $d['instagram'];?></td>
                        <td><?php echo $d['hp'];?></td>
                        <td><?php echo $d['tanggal'];?></td>
                        <td><?php echo $d['member'];?></td>
                        <td><?php echo $d['perawatan'];?></td>
                        <td><?php echo $d['diskon'];?></td>
                         <td class=""btn-opsi>
                            <a href="hapus.php?nik=<?php echo $d['nik']; ?>">
                                <button class="btn-hapus" >HAPUS</button>
                            </a>
                            <a href="editbook.php?nik=<?php echo $d['nik']; ?>">
                                <button class="btn-edit" >EDIT</button>
                            </a>
                        </td> 
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>