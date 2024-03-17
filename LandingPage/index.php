<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Darisantri.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="asset/image/logo_atas.png" rel="icon">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    #navbar {
      z-index: 999;
    }

    .nb {
      color: white;
    }

    .nb:hover {
      font-weight: bold;
      border-bottom: 4px solid white;
      color:white !important;
    }

    .ac {
      color: white;
      font-weight: bold;
      border-bottom: 4px solid white;
    }

    .header {
      background-color: #ffff;
      padding: 30px;
      text-align: center;
    }

    .carousel-item {
      transition: transform 2s ease, opacity .3s ease-out
    }

    #judulTengah {
      /* font-weight: bold; */
      /* padding: 7px 0; */
      border-bottom: 5px solid;
    }

    #dawuh {
      width: 100%;
      border-radius: 20px;
      box-shadow: 0px 0px 9px 1px rgb(26, 167, 99);
    }

    .content {
      padding: 16px;
      font-size: 30px;
    }


    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }

    .sticky+.content {
      padding-top: 60px;
    }
  </style>
</head>

<body>

  <!-- jumbotron atas -->
  <div class="header">
    <div class="container p-5 d-flex justify-content-evenly">
      <img src="asset/image/logo_darisantri.png" height="90px" class="text-center">
      <img src="asset/image/logo-maruf.png" height="90px">
      <img src="asset/image/ayo_mondok.png" height="90px">
    </div>
  </div>
  </div>
  <!-- end jumbotron -->

  <!-- navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg" style="background-color: #016A70;">
    <div class="container-fluid justify-content-center">
      <!-- <a class="navbar-brand" href="#">Darisantri.com</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <a class="nav-link nb" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nb" href="#berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nb" href="#reviewngaji">Review Ngaji</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nb" href="#cerpen">Cerpen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nb" href="#puisi">Puisi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nb" href="#tentang_kami">Tentang Kami</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <?php
    require_once('admin/koneksi.php');
    $q = "SELECT * FROM ms_carrousel ORDER BY id DESC";
    $query = mysqli_query($con,$q);

    // $judul = $data['judul'];   karena kita mau pake while, ini merupakan untuk pengambilan 1 saja berita. pake while buat ambil semuanya
    // $isi = $data['isi'];
    // $gbr = $data['gambar'];

    // pake while buat nampilin semuanya
    $judul = array();
    $gbr = array();
    $cpt = array();
    $index = 0;

    while ($data = mysqli_fetch_array($query)){
      $judul[$index] = $data['judul'];
      $gbr[$index] = $data['gambar'];
      $cpt[$index] = $data['caption'];
      $index++;
    }

?>
  <!-- carrousel -->
  <div id="carouselExampleCaptions" class="carousel slide mb-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/image/<?php echo $gbr[0];?>" class="d-block w-100 rounded" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $judul[0];?></h5>
          <p><?php echo $cpt[0];?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/image/<?php echo $gbr[1];?>" class="d-block w-100 rounded" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $judul[1];?></h5>
          <p><?php echo $cpt[1];?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/image/<?php echo $gbr[2];?>" class="d-block w-100 rounded" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $judul[2];?></h5>
          <p><?php echo $cpt[2];?></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carrousel -->

  <!-- ambil berita dari database -->
  <!-- php ambil berita dari database -->
  
<?php
    require_once('admin/koneksi.php');
    $q = "SELECT * FROM ms_berita ORDER BY date_create DESC";
    $query = mysqli_query($con,$q);

    // $judul = $data['judul'];   karena kita mau pake while, ini merupakan untuk pengambilan 1 saja berita. pake while buat ambil semuanya
    // $isi = $data['isi'];
    // $gbr = $data['gambar'];

    // pake while buat nampilin semuanya
    $judul = array();
    $gbr = array();
    $isi = array();
    $tgl = array();
    $user = array();
    $index = 0;

    while ($data = mysqli_fetch_array($query)){
      $judul[$index] = $data['judul'];
      $gbr[$index] = $data['gambar'];
      $isi[$index] = $data['isi'];
      $tgl[$index] = $data['date_create'];
      $user[$index] = $data['user_create'];
      $index++;
    }

?>

  <!-- berita pesantren -->
  <div class="container-md mt-5" id="berita">
    <h2 class="display-3 text-center">Berita Pesantren</h2>


    <!-- Berita Pesantren -->
    <div class="container-fluid mt-1 mb-5">
      <!-- Berita Kiri -->
      <div class="row p-0">
        <div class="col-md-4 col-sm-12 p-3">
          <div class="card kotakNaik opct0" style="width:100%; ">
            <img src="asset/image/<?php echo $gbr[0];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[0];?></h5>
              <p class="card-text"><?php echo $isi[0];?></p>
              <a href="#" class="btn btn-success">Baca Selengkapnya</a>
            </div>
          </div>

        </div>
        <!-- Berita Tengah -->
        <div class="col-md-4 col-sm-12 p-3">
          <div class="card kotakNaik" style="width: 100%;">
            <img src="asset/image/<?php echo $gbr[1];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[1];?></h5>
              <p class="card-text"><?php echo $isi[1];?></p>
              <a href="#" class="btn btn-success">Baca Selengkapnya</a>
            </div>
          </div>

        </div>
        <!-- Berita Kanan -->
        <div class="col-md-4 col-sm-12 p-3">
          <div class="card kotakNaik" style="width: 100%;">
            <img src="asset/image/<?php echo $gbr[2];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[2];?></h5>
              <p class="card-text"><?php echo $isi[2];?></p>
              <a href="#" class="btn btn-success">Baca Selengkapnya</a>
            </div>
          </div>

        </div>

      </div>
      <!-- Button Berita Laiinnya -->
      <div class="row text-center mt-4 ">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Berita Lainnya</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end berita -->

  <?php
    require_once('admin/koneksi.php');
    $q = "SELECT * FROM ms_reviewngaji ORDER BY date_create DESC";
    $query = mysqli_query($con,$q);

    // $judul = $data['judul'];   karena kita mau pake while, ini merupakan untuk pengambilan 1 saja berita. pake while buat ambil semuanya
    // $isi = $data['isi'];
    // $gbr = $data['gambar'];

    // pake while buat nampilin semuanya
    $judul = array();
    $gbr = array();
    $isi = array();
    // $tgl = array();
    // $user = array();
    $index = 0;

    while ($data = mysqli_fetch_array($query)){
      $judul[$index] = $data['judul'];
      $gbr[$index] = $data['gambar'];
      $isi[$index] = $data['isi'];
      // $tgl[$index] = $data['date_create'];
      // $user[$index] = $data['user_create'];
      $index++;
    }

?>

  <!-- Review ngji -->
  <div class="container-fluid pt-5 pb-5 mb-5 mt-5 bg-light" id="reviewngaji">
    <div class="container text-center">
      <h2 class="display-3 ">Review Ngaji</h2>
      <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, eius veniam. Animi iste dolore quas inventore
        ullam ipsa provident consequatur?</p>

      <div class="row row-cols-1 row-cols-md-2 g-4 mt-4" >
        <div class="col">
          <div class="card">
            <div class="kotakgbr" style="overflow: hidden; height: 275px;">
              <img src="asset/image/<?php echo $gbr[0];?>" class="card-img-top" alt="...">
            </div>

            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[0];?></h5>
              <p class="card-text"><?php echo $isi[0];?></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="kotakgbr" style="overflow: hidden; height: 275px;">
              <img src="asset/image/<?php echo $gbr[1];?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[1];?></h5>
              <p class="card-text"><?php echo $isi[1];?></p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <?php
    require_once('admin/koneksi.php');
    $q = "SELECT * FROM ms_cerpen ORDER BY date_create DESC";
    $query = mysqli_query($con,$q);

    // $judul = $data['judul'];   karena kita mau pake while, ini merupakan untuk pengambilan 1 saja berita. pake while buat ambil semuanya
    // $isi = $data['isi'];
    // $gbr = $data['gambar'];

    // pake while buat nampilin semuanya
    $judul = array();
    $gbr = array();
    $isi = array();
    // $tgl = array();
    // $user = array();
    $index = 0;

    while ($data = mysqli_fetch_array($query)){
      $judul[$index] = $data['judul'];
      $gbr[$index] = $data['gambar'];
      $isi[$index] = $data['isi'];
      // $tgl[$index] = $data['date_create'];
      // $user[$index] = $data['user_create'];
      $index++;
    }

?>  


  <!-- dawuh kiai -->
  <div class="container-md mt-5 ">
    <h2 class="display-3 text-center">Dawuh Kiai</h2>
    <!-- Banner Dawuh Kiai -->
    <div class="row">
      <div class="col-md-12 col-sm-12 p-4" style="width: 100%; overflow: hidden;">
        <img id="dawuh" class="kotakNaik" src="asset/image/bannerdawuh.jpg" />
      </div>
    </div>
  </div>

  <!-- cerpen -->
  <div class="container-fluid pt-5 pb-5 mt-5 bg-light" id="cerpen">
    <div class="container">
      <h2 class="display-3 text-center">Cerpen</h2>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, fuga!</p>
      <div class="clearFix pt-5 pb-5">
        <img src="asset/image/<?php echo $gbr[0];?>" class="col-md-6  mb-3 crop-img float-md-start" height="300">
        <h3 class="pt-5 text-center"><?php echo $judul[0];?></h3>
        <p class="text-end ms-1"><?php echo substr($isi[0],0,500);?></p>

      </div>
    </div>

  </div>


  <?php
    require_once('admin/koneksi.php');
    $q = "SELECT * FROM ms_puisi ORDER BY date_create DESC";
    $query = mysqli_query($con,$q);

    // $judul = $data['judul'];   karena kita mau pake while, ini merupakan untuk pengambilan 1 saja berita. pake while buat ambil semuanya
    // $isi = $data['isi'];
    // $gbr = $data['gambar'];

    // pake while buat nampilin semuanya
    $judul = array();
    $gbr = array();
    $isi = array();
    // $tgl = array();
    // $user = array();
    $index = 0;

    while ($data = mysqli_fetch_array($query)){
      $judul[$index] = $data['judul'];
      $gbr[$index] = $data['gambar'];
      $isi[$index] = $data['isi'];
      // $tgl[$index] = $data['date_create'];
      // $user[$index] = $data['user_create'];
      $index++;
    }

?>  
  <!-- Puisi -->
  <div class="container-md pt-5 pb-5 " id="puisi">
    <div class="container text-center">
      <h2 class="display-3" id="porto">Puisi</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur recusandae aspernatur quia maiores labore
        commodi sapiente dolorem! Voluptate, dicta voluptatibus.</p>

      <div class="row d-flex">
        <div class="col">
          <div class="card">
            <img src="asset/image/<?php echo $gbr[0];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[0];?></h5>
              <p class="card-text"><?php echo substr($isi[0],0,200);?></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="asset/image/<?php echo $gbr[1];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[1];?></h5>
              <p class="card-text"><?php echo substr($isi[1],0,200);?></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="asset/image/<?php echo $gbr[2];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[2];?></h5>
              <p class="card-text"><?php echo substr($isi[2],0,200);?></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="asset/image/<?php echo $gbr[3];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul[3];?></h5>
              <p class="card-text"><?php echo substr($isi[3],0,200);?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- tentang kami -->
  <div class="container-fluid pt-5 pb-5 bg-light" id="tentang_kami">
    <div class="container">
      <h2 class="display-3 text-center" >Tentang Kami</h2>
      <p class="text-center">Darisantri.com "Melukis Kisah, Menggapai Barokah"</p>
      <div class="clearFix pt-5 pb-5">
        <img src="asset/image/logo_dsBesar.png" class="col-md-6 float-md-end mb-3 crop-img" width="300">
        <h3 class="pt-5">Lorem ipsum dolor sit amet consectetur.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis animi beatae sequi nisi nesciunt iste sint non
          aspernatur architecto alias vero rerum, praesentium eaque necessitatibus voluptas. Cupiditate recusandae quis,
          ducimus libero sapiente dolore repudiandae consequuntur ratione voluptate accusantium. Quam laborum, rerum
          maiores sunt porro error deserunt. Quibusdam, recusandae quasi nobis exercitationem vel ratione atque autem.
        </p>

      </div>
    </div>
  </div>


  <!-- footer -->
  <footer>
    <!--  -->
    <div class="container-fluid pt-5 pb-5" style="background-color:#183D3D">
      <div class="container text-center">
        <!-- <h4 class="display-6 text-center text-light">Iingin Karyamu Dimuat ?</h4>
          <p class="text-center text-light mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, fuga!</p>
          <button type="button" class="btn btn-danger">Kirim Disini</button>

          <hr class="mt-3 mb-2 " style="color: red;"> -->
        <img src="asset/image/logo_darisantri.png" class="rounded mt-3" style="height: 35px;">
        <p class="text-light mt-3">Darisantri.com Official Website</p>
        <p class="text-light" style="margin-top: 5px;">Dikelola oleh Tim Jurnalistik Santri Pondok Pesantren
          Al-Ma'rufiyyah, Semarang</p>

      </div>
    </div>

    <!-- Tentang Kami -->
    <div class="container-fluid pb-5" style="background-color: #2E4F4F; height: 10px;">
      <p class="p-2" style="color: white;">Copyright &copy; 2024 Darisantri.com</p>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    window.onscroll = function () { myFunction() };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>

</body>

</html>