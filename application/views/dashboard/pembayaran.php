<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pembayaran</title>
    <link rel="icon" href="<?= base_url('assets/') ?>img/GaweWorld.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="<?= base_url('assets/'); ?>img/GaweWorld.png" alt="Logo" width="48" height="36" class="d-inline-block align-text-top">
        <a class="navbar-brand text-danger" href="#">Gaωe World</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <li class="nav-item active">
                    <a class="nav-link text-danger" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Notif</a>
                               
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <div class="input-group">
                            <input class="form-control mr-sm-2" type="search" placeholder="Cari game..." aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Content -->
    <div class="container mt-4">

        <!-- Rincian Pembayaran -->
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h4>Instruksi Pembayaran</h4>
                <p>
                    Silakan lakukan pembayaran sejumlah total ke rekening berikut:
                </p>
                <p>
                    Nama Bank: Bank ABC<br>
                    Nomor Rekening: 1234567890<br>
                    Nama Penerima: Gaωe World
                </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>
    <br>

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
                        <li><a href="#!" class="text-dark">Pusat Bantuan</a></li>
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

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>