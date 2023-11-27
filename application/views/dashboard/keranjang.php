<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout - Game Shop</title>
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

                <li class="nav-item active">
                    <a class="nav-link text-danger" href="<?= base_url('dashboard/bost'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= base_url('dashboard/produk'); ?>">Produk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= base_url('dashboard/akun'); ?>">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= base_url('dashboard/notifikasi'); ?>">Notif</a>
                               
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
        <h2>Keranjang Belanja</h2>

        <!-- Daftar Produk di Keranjang -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="https://via.placeholder.com/50" alt="Gambar Produk"></td>
                    <td>140 Diamonds</td>
                    <td>Rp. 20.000</td>
                    <td>
                        <input type="number" value="2" min="1">
                    </td>
                    <td>Rp.40.000</td>
                    <td><button class="btn btn-danger btn-sm">Hapus</button></td>
                </tr>
                <tr>
                    <td><img src="https://via.placeholder.com/50" alt="Gambar Produk"></td>
                    <td>1200 PB CASH</td>
                    <td>Rp. 11.000</td>
                    <td>
                        <input type="number" value="3" min="1">
                    </td>
                    <td>Rp.33.000</td>
                    <td><button class="btn btn-danger btn-sm">Hapus</button></td>
                </tr>
                <!-- Tambahkan baris produk lainnya di sini -->
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- Informasi Jumlah dan Harga Subtotal -->
        <div class="row">
            <div class="col-md-6">
                <p>Jumlah Produk: <strong>2</strong></p>
            </div>
            <div class="col-md-6 text-right">
                <p>Harga Subtotal: <strong>Rp.73.000</strong></p>
            </div>
        </div>

        <!-- Tombol Lanjut ke Checkout dan Hapus -->
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="<?= base_url('checkout'); ?>" class="btn btn-primary">Lanjut ke Checkout</a>
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-danger">Hapus Keranjang</button>
            </div>
        </div>
    </div>
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