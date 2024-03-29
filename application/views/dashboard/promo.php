<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Daftar promo</title>
  <link rel="icon" href="<?= base_url('assets/') ?>img/GaweWorld.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .game-card {
      margin-bottom: 20px;
    }
  </style>
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
            <a class="nav-link text-danger" href="#">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="<?= base_url('halamanbaru/'); ?>Keranjang.html">Keranjang</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link text-danger" href="#">Akun</a>
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

  <div class="container">
    <h1 class="my-4">Daftar promo </h1>

    <div class="row">
      <!-- Game 1 -->
      <div class="col-md-4 game-card">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/'); ?>img/immobb.png" class="card-img-top" alt="Game 1">
          <div class="card-body">
            <h5 class="card-title">Blastforge Exhaler of the Crimson Witness</h5>
            <h5><del>Rp 50.000</del></h5>
            <h5 class="card-title">Rp 35.000</h5>
            <p class="card-text">Bristleback immortal the international 2017</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

      <!-- Game 2 -->
      <div class="col-md-4 game-card">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/'); ?>img/case.jpg" class="card-img-top" alt="Game 2">
          <div class="card-body">
            <h5 class="card-title">CSGO Case</h5>
            <br>
            <h5><del>Rp 15.000</del></h5>
            <h5 class="card-title">Rp 7.500</h5>
            <p class="card-text">Gacha Skin Weaponmu Dengan CSGO Case Yang Sedang Promo ini</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

      <!-- Game 3 -->
      <div class="col-md-4 game-card">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/'); ?>img/ff.jpg" class="card-img-top" alt="Game 3">
          <div class="card-body">
            <h5 class="card-title">Akun FF dewa murah dan tinggal main </h5>
            <h5><del>Rp 700.000</del></h5>
            <h5 class="card-title">Rp 650.000</h5>
            <p class="card-text">Akun Sejak Tahun 2019 Skin Lengkap No Hackbak</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

      <!-- Game 4 -->
      <div class="col-md-4 game-card">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/'); ?>img/lr.jpg" class="card-img-top" alt="Game 4">
          <div class="card-body">
            <h5 class="card-title">Royal Lock</h5>
            <h5><del>Rp 800.000</del></h5>
            <h5 class="card-title">Rp 650.000</h5>
            <p class="card-text">Kunci World Mu Dengan Pesona Yang Kelap Kelip.</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

      <!-- Game 5 -->
      <div class="col-md-4 game-card">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/'); ?>img/lunox.jpg" class="card-img-top" alt="Game 5">
          <div class="card-body">
            <h5 class="card-title">Chaos And Order Lunox</h5>
            <br>
            <h5><del>Rp 500.000</del></h5>
            <h5 class="card-title">Rp 450.000</h5>
            <p class="card-text">Lunox epic skin Chaos And Order</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>



      <!-- Game 6 -->
      <div class="col-md-4 game-card">
        <div class="card " style="width: 18rem;">
          <img src="<?= base_url('assets/'); ?>img/ak47.PNG" class="card-img-top" alt="Game 6">
          <div class="card-body">
            <h5 class="card-title">Gold Plate - AKM</h5>
            <p class="card-text">Skin Senjata AKM PUBG</p>
            <h5><del>Rp 20.000</del></h5>
            <h5 class="card-title">Rp 15.000</h5>
            <a href="#" class="btn btn-primary">Buy</a>
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


  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>