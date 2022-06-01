<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>

  <!-- NAVIGATION BAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="assets/LOGO.png" width=60px></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#product">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-3 my-lg-0" action=login.php>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id=book> LOGIN </button>
    </form>
  </div>
</nav>

<!-- SLIDER IMAGE -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/slider1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Glow Beauty Women</h5>
        <p>Klinik kecantikan terbaik didunia.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/slider2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color=black>Glow Beauty Women</font></h5>
        <p><font color=black>Memberikan perawatan terbaik menggunakan alat terbaik dan dirawat oleh dokter bersertifikat internasional.</font></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/slider3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color=black>Glow Beauty Women</font></h5>
        <p><font color=black>Menjual produk terbaik yang telah disertifikasi oleh BPOM.</font></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>


<div class="mainmenu">
  <!-- ABOUT US -->
  <div class="bgabout">
    <div class="about p-5">
      <div class="shadow p-3 mt-5 bg-white rounded-3">
        <h3>WHY GBW ?</h3>
        <div class="row row-cols-2">
          <div class="col-lg-3"><img src="assets/logo2.png" width=100%></div>
          <div class="col-lg-9"><p align="justify">Kami percaya akan kesempurnaan dalam meningkatkan kualitas hidup. Karena prioritas kami adalah membuat Anda merasa lebih cantik dan percaya diri.
          Untuk alasan inilah, kami menyajikan seni keindahan alami tingkat dunia, menggunakan bahan-bahan natural yang didukung oleh ilmu pengetahuan terbaru dengan biaya yang terjangkau.
          Kami jamin Anda akan merasa sangat nyaman dan dimanjakan saat proses revitalisasi dan peremajaan berlangsung. Datang dan bergabunglah bersama kami! Dengan pengalaman 9 tahun dengan total 10 klinik adalah bukti bahwa Gloskin adalah klinik estetika terpercaya di Indonesia.
          Memberi hasil yang nyata, didukung oleh produk berkualitas dan peralatan canggih yang terus mengikuti perkembangan teknologi.
          Mengutamakan kenyamanan dan privasi pelanggan. Ruang tunggu nyaman, serta tidak sakit selama melakukan perawatan.</div>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="service" style="padding: 100px;">
  <!-- OUR SERVICE -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="shadow p-5 bg-white rounded">
            <h3 align=center>--- OUR SERVICE ---</h3>
            <div class="card-deck mb-4">
              <div class="card" style="width: 10rem;">
                <img src="assets/rawat1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">I2PL WHITENING REJUVE</h5>
                  <p class="card-text">I2PL adalah terapi sinar yang akan melewati lapisan terluar kulit (epidermis) dan menembus lapisan yang lebih dalam (dermis) dimana terdapat pembuluh darah, kolagen dan elastin.</p>
                  <a href="book.php" class="btn btn-outline-success">Book Now!</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="assets/rawat2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">I2PL ACNE</h5>
                  <p class="card-text">I2PL adalah terapi sinar yang akan melewati lapisan terluar kulit (epidermis) dan menembus lapisan yang lebih dalam (dermis) dimana terdapat pembuluh darah, kolagen dan elastin.</p>
                  <a href="book.php" class="btn btn-outline-success">Book Now!</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="assets/rawat3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">I2PL ACNE DAN WHITENING</h5>
                  <p class="card-text">I2PL adalah terapi sinar yang akan melewati lapisan terluar kulit (epidermis) dan menembus lapisan yang lebih dalam (dermis) dimana terdapat pembuluh darah, kolagen dan elastin.</p>
                  <a href="book.php" class="btn btn-outline-success">Book Now!</a>
                </div>
              </div>
            </div>
            <div class="card-deck">
              <div class="card" style="width: 18rem;">
                <img src="assets/rawat4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">LASER ACNE</h5>
                  <p class="card-text">Laser bermanfaat untuk Meningkatkan produksi kolagen untuk mengurangi kerutan dan jaringan parut di wajah. Meningkatkan sirkulasi darah di area sekitar wajah. Mengurangi peradangan baik karena jerawat atau masalah lain di wajah.</p>
                  <a href="book.php" class="btn btn-outline-success">Book Now!</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="assets/rawat5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">LASER WHITENING</h5>
                  <p class="card-text">Laser bermanfaat untuk Meningkatkan produksi kolagen untuk mengurangi kerutan dan jaringan parut di wajah. Meningkatkan sirkulasi darah di area sekitar wajah. Mengurangi peradangan baik karena jerawat atau masalah lain di wajah.</p>
                  <a href="book.php" class="btn btn-outline-success">Book Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="products p-5">
  <!-- OUR PRODUCTS -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="products shadow p-5 bg-white rounded">
            <h3 align=center>--- OUR PRODUCTS ---</h3>
            <div class="card-deck">
              <div class="card" style="width: 18rem;">
                <img src="assets/produk1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PAKET CANTIK 1</h5>
                  <p class="card-text">Rp. 500.000</p>
                  <a href="shop.php" class="btn btn-outline-success">Shop Now!</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="assets/produk2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PAKET CANTIK 2</h5>
                  <p class="card-text">Rp. 1.000.000</p>
                  <a href="shop.php" class="btn btn-outline-success">Shop Now!</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="assets/produk3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PAKET CANTIK 3</h5>
                  <p class="card-text">Rp. 1.500.000</p>
                  <a href="shop.php" class="btn btn-outline-success" align=center>Shop Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- AKHIR OUR PRODUCTS -->
  

  <!-- FOOTER -->
  <div class="footer shadow-lg p-5 bg-white rounded">
    <h3 align=center>CONTACT US</h3>
    <p align=center>Kami siap melayani dan membantu dengan senang hati atas pertanyaan, permintaan serta reservasi untuk treatment Anda di Gloskin Aesthetic Clinic.</p><br>
    <div class="row row-cols-2">
      <div class="col-lg-8">
          <h5>ALAMAT</h5>
          Jl. Pasar Gelap No.1010 Rt.01 Rw.01, Ilir Utara II, Semenanjung, Sumatera Tengah 300310 <br> <br>
          <h5>KONTAK</h5>
          Whatsapp  : (+62) 8516299201 <br>
          Instagram : @gbwclinic.id <br><br>
          <h5>JAM OPERASIONAL</h5>
          Senin  : 09:00 - 19:00 <br>
          Selasa : 09:00 - 19:00 <br>
          Rabu   : 09:00 - 19:00 <br>
          Kamis  : 09:00 - 19:00 <br>
          Jumat  : 09:00 - 19:00 <br>
          Sabtu  : 09:00 - 19:00 <br>
          Minggu : Tutup <br>
      </div>
      <div class="col-lg-4"><div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Hotel%20Santika%20Radial%20Palembang&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:400px;}</style><a href="https://www.embedgooglemap.net">how to add google map to my website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;}</style></div></div></div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>