<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="stylebook.css">
    <style>
        body{
            background-image:url('assets/bg1.jpg')
        }
    </style>
</head>
<body>
    <div>
        <div>
            <h1>PEMBELIAN</h1>
        </div>
        <div class="ui">
            <div class="papan-input">
            <?php
                        include 'koneksi.php';
                        $nik = $_GET['nik'];
                        $data = mysqli_query($db, "SELECT * FROM tbshopping WHERE nik='$nik'");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                <div>
                <form action="editshopping.php" method=post>
                        <div>
                            <table class="tabel-edit" border=0>
                                <tr>
                                    <td><label for="nik">NIK</label></td>
                                    <td><input type="text" class="input-edit" id=nik name=nik placeholder="NIK" value="<?php echo $d['nik']; ?>"></td>
                                </tr>

                                <tr>
                                    <td><label for="nama">Nama</label></td>
                                    <td><input class="input-edit" type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo $d['nama']; ?>"></td>
                                </tr>

                                <tr>
                                    <td><label for="alamat">Alamat</label></td>
                                    <td><input class="input-edit" type="text" id="alamat" name="alamat" placeholder="Alamat Rumah" value="<?php echo $d['alamat']; ?>"></td>
                                </tr>

                                <tr>
                                    <td><label for="instagram">Instagram</label></td>
                                    <td><input class="input-edit" type="text" id="instagram" name="instagram" placeholder="Instagram" value="<?php echo $d['instagram']; ?>"></td>
                                </tr>

                                <tr>
                                    <td><label for="hp">No. Handphone</label></td>
                                    <td><input class="input-edit" type="text" id="hp" name="hp" placeholder="No. Handphone" value="<?php echo $d['hp']; ?>"></td>
                                </tr>

                                <tr>
                                    <td><label for="tanggal">Tanggal</label></td>
                                    <td><input class="input-edit" type="date" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $d['tanggal']; ?>"></td>
                                </tr>

                                <tr>
                                    <td><legend > Member</legend></td>
                                    <td>
                                        <div>
                                            <input class="form-check-input" type="radio" name="member" id="gridRadios1" value="Member">
                                            <label class="form-check-label" for="gridRadios1"> Member </label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="member" id="gridRadios2" value="Tidak member">
                                            <label class="form-check-label" for="gridRadios1"> Tidak Member </label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><legend >Paket</legend></td>
                                    <td>
                                    <select class=select name=paket id="produk">
                                        <option value="PAKET CANTIK 1">PAKET CANTIK 1</option>
                                        <option value="PAKET CANTIK 2">PAKET CANTIK 2</option>
                                        <option value="PAKET CANTIK 3">PAKET CANTIK 3</option>
                                    </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="diskon">Diskon</label></td>
                                    <td id="diskon"></td>
                                    <!-- <td><input class="input-edit" type="text" id="diskon" name="diskon" placeholder="Diskon"></td> -->
                                </tr>
                            </table>
                        </div>
                        <div>
                        <input class="btn-kirim" type="submit" id="kirim" name="kirim" value="Kirim">
                        </div>
                    </form>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        var potongan;
        var diskon;
        var tampilDiskon = document.getElementById('diskon');
        var selectProduk = document.getElementById('produk');
        selectProduk.addEventListener('change', function () {
            console.log('test')
            var radioMember = document.getElementById('gridRadios1').checked ? "Member" : "Tidak Member";
            if (selectProduk.value == "PAKET CANTIK 1") {
                if (radioMember == "Member") {
                    potongan = 500000 * 0.25;
                }else{
                    potongan = 0;
                }

                diskon = 1000000 - potongan;
            } else if (selectProduk.value == "PAKET CANTIK 2") {
                if (radioMember == "Member") {
                    potongan = 1000000 * 0.25;
                }else{
                    potongan = 0;
                }

                diskon = 1500000 - potongan;
            } else if (selectProduk.value == "PAKET CANTIK 3") {
                if (radioMember == "Member") {
                    potongan = 1500000 * 0.25;
                }else{
                    potongan = 0;
                }
                
                diskon = 2000000 - potongan;
            }

            tampilDiskon.innerHTML = 'Rp. ' + potongan;
        });
    </script>
</body>
</html>