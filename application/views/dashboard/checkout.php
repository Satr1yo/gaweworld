<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout</title>
    <link rel="icon" href="<?= base_url('assets/') ?>img/GaweWorld.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="<?= base_url('assets/'); ?>img//GaweWorld.png" alt="Logo" width="48" height="36" class="d-inline-block align-text-top">
        <a class="navbar-brand text-danger" href="#">Gaωe World</a>
    </nav>


    <!-- Content -->
    <div class="container mt-4">
        <h2>Pembayaran</h2>
        <!-- Rincian Pembayaran -->
        <div class="row">
            <div class="col-md-6">
                <h4>Rincian Pesanan</h4>
                <!-- Contoh daftar pesanan -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>140 Diamonds</td>
                            <td>2</td>
                            <td>Rp.40.000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>1200 PB Cash</td>
                            <td>3</td>
                            <td>Rp.33.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Konfirmasi Pembayaran -->
            <div class="col-md-6">
                <h4>Konfirmasi Pembayaran</h4>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Subtotal
                        <span class="badge badge-primary badge-pill">Rp.73.000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Biaya Admin
                        <span class="badge badge-primary badge-pill">Rp.2.000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Total
                        <span class="badge badge-primary badge-pill">Rp.75.000</span>
                    </li>
                </ul>
            </div>
        </div>
        <form action="<?= base_url('dashboard/pembayaran'); ?>" method="post">
            <div class="row mt-4">
                <div class="col-md-12">
                    <h4>Pilih Metode Pembayaran</h4>
                </div>
            </div>

            <!-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <a>
                    Terakhir Dipakai
                </a>
                <h4>
                    OVO
                </h4>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div> -->

            <div class="form-check">
                <input class="form-check-input" type="radio" name="metodePembayaran" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    OVO
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="metodePembayaran" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    GOPAY
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="metodePembayaran" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                    INDOMART
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="metodePembayaran" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault3">
                    Debit/Rekening
                </label>
            </div>

            <button type="submit" class="btn btn-primary float-right">Bayar Sekarang</button>
        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>