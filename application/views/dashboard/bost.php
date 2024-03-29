<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="icon" href="<?= base_url('assets/') ?>img/GaweWorld.png" type="image/x-icon">
  <style>
    #carouselExampleDark {
      width: 90%;
      /* Sesuaikan lebar sesuai kebutuhan */
      margin: auto;
      height: 10%;
      /* Untuk membuat carousel berada di tengah halaman */
    }

    /* Mengatur tinggi gambar dalam carousel */
    .carousel-item img {
      height: 250px;
      /* Sesuaikan tinggi sesuai kebutuhan */
      object-fit: cover;
      /* Agar gambar mengisi area dengan mempertahankan aspek rasio */
    }

    /* Mengatur tinggi caption dalam carousel */
    .carousel-caption {
      max-width: 100%;
      /* Agar caption tidak melebar melebihi carousel */
    }

    h6 {
      text-align: right;
      color: blue;
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-danger" href="#">
        <img src="<?= base_url('assets/'); ?>img/GaweWorld.png" alt="Logo" width="48" height="36" class="d-inline-block align-text-top">
        Gaωe World
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Top Up</a>
              <a class="dropdown-item" href="#">Voucher</a>
              <a class="dropdown-item" href="#">Akun</a>
              <a class="dropdown-item" href="#">Koin Game</a>
              <a class="dropdown-item" href="#">Item</a>
              <a class="dropdown-item" href="#">Consol</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="<?= base_url('dashboard/bost'); ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="<?= base_url('dashboard/produk'); ?>">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="<?= base_url('dashboard/keranjang'); ?>">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="<?= base_url('dashboard/akun'); ?>">Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="<?= base_url('dashboard/notifikasi'); ?>">Notif</a>
          </li>

          <li class="nav-item">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Cari game..." aria-label="Search">
              <button class="btn btn-danger" type="submit">Cari</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>


  <h1 class="display-4"></h1>

  <!-- carousel -->
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <!-- Adjusted data-bs-interval to 2000 milliseconds (2 seconds) -->
        <img src="<?= base_url('assets/'); ?>img/dota2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-white">DOTA 2</h1>
          <h2 class="text-white">Webstite Item Dota 2 Termurah</h2>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="<?= base_url('assets/'); ?>img/gt.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-white">GROWTOPIA</h1>
          <h2 class="text-white">Semua Diamond Lock Ada Disini</h2>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="<?= base_url('assets/'); ?>img/pubeg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-white">PUBG</h1>
          <h2 class="text-white">Item Terlengkap Ada Disini</h2>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>


  <!-- card logo -->
  <h2> Gaωe Shop</h2>
  <br>
  <h6><a href="<?= base_url('dashboard/produk'); ?>">Lihat semua produk</a></h6>
  <div class="row g-4 justify-content-center mb-4">
    <div class="col-md-1">
      <div class="card-diam" id="shop">
        <a href="https://www.contoh.com">
          <img src="<?= base_url('assets/'); ?>img/diamondd.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <center>
            <h5 class="card-title">Top Up</h5>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-1">
      <div class="card-voc ">
        <a href="https://www.contoh.com">
          <img src="<?= base_url('assets/'); ?>img/voccc.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <center>
            <h5 class="card-title">Voucher</h5>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-1">
      <div class="card-akun ">
        <a href="https://www.contoh.com">
          <img src="<?= base_url('assets/'); ?>img/alogin.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <center>
            <h5 class="card-title">Akun</h5>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-1">
      <div class="card-coin">
        <a href="https://www.youtube.com">
          <img src="<?= base_url('assets/'); ?>img/pika_coin.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <center>
            <h5 class="card-title">Koin Game</h5>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-1">
      <div class="card-sword">
        <a href="https://www.youtube.com">
          <img src="<?= base_url('assets/'); ?>img/dsword.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <center>
            <h5 class="card-title">Item</h5>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-1">
      <div class="card-kons">
        <a href="https://www.google.com">
          <img src="<?= base_url('assets/'); ?>img/psp.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <center>
            <h5 class="card-title">consol</h5>
          </center>
        </div>
      </div>
    </div>
  </div>

  <br>
  <!-- card -->
  <h2> Gaωe Hot Sale!!!</h2>
  <br>
  <h6><a href="<?= base_url('dashboard/promo'); ?>">Lihat semua promo</a></h6>
  <br>
  <div class="row g-0">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;" id="promo">
        <img src="<?= base_url('assets/'); ?>img/dl.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Diamond Lock</h5>
          <h5><del>Rp 1.000</del></h5>
          <h5 class="card-title">Rp 500</h5>
          <p class="card-text">Sebuah Kunci Untuk Menjaga Duniamu</p>
          <a href="#" class="btn btn-primary" id="buyDiamondLock">Buy</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="<?= base_url('assets/'); ?>img/zeus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Zeus Arcana</h5>
          <h5><del>Rp 200.000</del></h5>
          <h5 class="card-title">Rp 150.500</h5>
          <p class="card-text">Variasikan Zeus Mu Dengan Tempest Helm of the Thundergod</p>
          <a href="#" class="btn btn-primary" id="buyArcanazeus">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="<?= base_url('assets/'); ?>img/lina.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lina Arcana</h5>
          <h5><del>Rp 200.000</del></h5>
          <h5 class="card-title">Rp 130.000</h5>
          <p class="card-text"> Lina Dengan Fiery Soul of the Slayer</p>
          <a href="#" class="btn btn-primary" id="buyArcanalina">Buy</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="<?= base_url('assets/'); ?>img/pani.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Fanny Skylar</h5>
          <h5><del>Rp 800.000</del></h5>
          <h5 class="card-title">Rp 650.000</h5>
          <p class="card-text"> Terbanglah Bersama Skin Skylar</p>
          <a href="#" class="btn btn-primary" id="buyPani">Buy</a>
        </div>
      </div>
      <br>
    </div>

    <!-- grid card -->

    <h2>Gawe News</h2>
    <br>
    <h6><a href="<?= base_url('dashboard/news'); ?>">Lihat semua berita</a></h6>

    <div class="container mt-5">
      <div class="row">
        <!-- Example 1 -->
        <div class="col-md-6 mb-4">
          <div class="card">
            <img src="<?= base_url('assets/'); ?>img/venom.jpg" class="card-img-top" alt="Game News Image">
            <div class="card-body">
              <h5 class="card-title">New Spiderman 2 is Game Of The Year</h5>
              <p class="card-text">Can spiderman 2 get game of the year this year and will it be the proud game of playstation in 2023</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#news1Content" aria-expanded="false" aria-controls="news1Content">Read More</a>
            </div>
            <div class="collapse" id="news1Content">
              <div class="card-footer text-muted">
                Published on November 26, 2023
              </div>
              <div class="card-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, delectus modi, illo vel sit a consequatur, quisquam sint laboriosam sed provident labore eos eveniet consectetur fugiat. Veniam numquam saepe maxime!</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Example 2 -->
        <div class="col-md-6 mb-4">
          <div class="card">
            <img src="<?= base_url('assets/'); ?>img/nolan.jpg" class="card-img-top" alt="Game News Image">
            <div class="card-body">
              <h5 class="card-title">Review Nolan The New Hero In Mobile Legend</h5>
              <p class="card-text">Mobile Legends Bang Bang this time has a new assassin type hero, namely Nolan and Layla's father</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#news2Content" aria-expanded="false" aria-controls="news2Content">Read More</a>
            </div>
            <div class="collapse" id="news2Content">
              <div class="card-footer text-muted">
                Published on November 25, 2023
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Example 3 -->
        <div class="col-md-6 mb-4">
          <div class="card">
            <img src="<?= base_url('assets/'); ?>img/space.jpg" class="card-img-top" alt="Game News Image">
            <div class="card-body">
              <h5 class="card-title">Exclusive Interview with Indonesia Game Developer</h5>
              <p class="card-text">This time we had the opportunity to interview one of the Indonesian game developers</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#news3Content" aria-expanded="false" aria-controls="news3Content">Read More</a>
            </div>
            <div class="collapse" id="news3Content">
              <div class="card-footer text-muted">
                Published on November 24, 2023
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Example 4 -->
        <div class="col-md-6 mb-4">
          <div class="card">
            <img src="<?= base_url('assets/'); ?>img/sultan.jpg" class="card-img-top" alt="Game News Image">
            <div class="card-body">
              <h5 class="card-title">How To Be Rich In GROWTOPIA</h5>
              <p class="card-text">These are some tips for beginners to get rich quickly in Growtopia</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#news4Content" aria-expanded="false" aria-controls="news4Content">Read More</a>
            </div>
            <div class="collapse" id="news4Content">
              <div class="card-footer text-muted">
                Published on November 23, 2023
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer -->
    <footer class="bg-light text-center text-lg-left mt-4">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">GaWe World</h5>
            <p>Jalan Khayalan Indah No. 123
              Kota Imajinopolis, Nusantara</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Tautan</h5>
            <ul class="list-unstyled mb-0">
              <li><a href="#!" class="text-dark">Kebijakan Privasi</a></li>
              <li><a href="#!" class="text-dark">Syarat dan Ketentuan</a></li>
              <li><a href="#!" class="text-dark">Tentang Kami</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Hubungi Kami</h5>
            <ul class="list-unstyled mb-0">
              <li>Email: gaweworld@gworld.com</li>
              <li>Telepon: (081) 122-2146</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center p-3" style="background-color: rgb(255, 105, 105);">
        © 2023 Gaωe World
      </div>
    </footer>


    <script src="<?= base_url('assets/'); ?>js/fitur.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>