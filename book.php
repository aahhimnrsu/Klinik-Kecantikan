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
            <h1>PEMESANAN</h1>
        </div>
        <div class="ui">
            <div class="papan-input">
                <div>
                    <form action="booking.php" method=post>
                        <div>
                            <table class="tabel-edit" border=0>
                                <tr>
                                    <td><label for="nik">NIK</label></td>
                                    <td><input type="text" class="input-edit" id=nik name=nik placeholder="NIK"></td>
                                </tr>

                                <tr>
                                    <td><label for="nama">Nama</label></td>
                                    <td><input class="input-edit" type="text" id="nama" name="nama" placeholder="Nama Lengkap"></td>
                                </tr>

                                <tr>
                                    <td><label for="alamat">Alamat</label></td>
                                    <td><input class="input-edit" type="text" id="alamat" name="alamat" placeholder="Alamat Rumah"></td>
                                </tr>

                                <tr>
                                    <td><label for="instagram">Instagram</label></td>
                                    <td><input class="input-edit" type="text" id="instagram" name="instagram" placeholder="Instagram"></td>
                                </tr>

                                <tr>
                                    <td><label for="hp">No. Handphone</label></td>
                                    <td><input class="input-edit" type="text" id="hp" name="hp" placeholder="No. Handphone"></td>
                                </tr>

                                <tr>
                                    <td><label for="tanggal">Tanggal</label></td>
                                    <td><input class="input-edit" type="date" id="tanggal" name="tanggal" placeholder="Tanggal"></td>
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
                                    <td><legend >Perawatan</legend></td>
                                    <td>
                                    <select class=select name=perawatan id="produk">
                                        <option value="I2PL WHITENING REJUVE">I2PL WHITENING REJUVE</option>
                                        <option value="I2PL ACNE">I2PL ACNE</option>
                                        <option value="I2PL ACNE DAN WHITENING">I2PL ACNE DAN WHITENING</option>
                                        <option value="LASER ACNE">LASER ACNE</option>
                                        <option value="LASER WHITENING">LASER WHITENING</option>
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
                        <input class="btn-kirim" type="submit" id="kirim" name="kirim" value="Kirim"  onclick="myalert()">
                        </div>
                    </form>
                </div>
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
            if (selectProduk.value == "I2PL WHITENING REJUVE") {
                if (radioMember == "Member") {
                    potongan = 450000 * 0.25;
                }else{
                    potongan = 0;
                }

                diskon = 450000 - potongan;
            } else if (selectProduk.value == "I2PL ACNE") {
                if (radioMember == "Member") {
                    potongan = 405000 * 0.25;
                }else{
                    potongan = 0;
                }

                diskon = 405000 - potongan;
            } else if (selectProduk.value == "I2PL ACNE DAN WHITENING") {
                if (radioMember == "Member") {
                    potongan = 585000 * 0.25;
                }else{
                    potongan = 0;
                }
                
                diskon = 585000 - potongan;
            } else if (selectProduk.value == "LASER ACNE") {
                if (radioMember == "Member") {
                    potongan = 405000 * 0.25;
                }else{
                    potongan = 0;
                }
                
                diskon = 405000 - potongan;
            } else if (selectProduk.value == "LASER WHITENING") {
                if (radioMember == "Member") {
                    potongan = 405000 * 0.25;
                }else{
                    potongan = 0;
                }
                
                diskon = 405000 - potongan;
            }

            tampilDiskon.innerHTML = 'Rp. ' + potongan;        
        });
    
        function myalert(){
            alert("PESANAN ANDA BERHASIL\nSilahkan tunggu konfirmasi melalui No.Handphone");
        }
    </script>
</body>
</html>