<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pusat Bantuan</title>
    <link rel="icon" href="<?= base_url('assets/') ?>img/GaweWorld.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>


    <!-- Content -->
    <div class="container mt-4">
        <h2>Pusat Bantuan</h2>

        <!-- Pertanyaan Umum (FAQ) -->
        <div class="row">
            <div class="col-md-12">
                <h4>Pertanyaan Umum (FAQ)</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Bagaimana cara memesan produk?</strong><br>
                        Anda dapat memesan produk dengan menambahkannya ke keranjang belanja dan mengikuti langkah-langkah checkout.
                    </li>
                    <li class="list-group-item">
                        <strong>Bagaimana cara mengubah kata sandi akun?</strong><br>
                        Anda dapat mengubah kata sandi akun di halaman Pengaturan Akun.
                    </li>
                    <!-- Tambahkan pertanyaan umum lainnya di sini -->
                </ul>
            </div>
        </div>

        <!-- Hubungi Kami -->
        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Hubungi Kami</h4>
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>

        <!-- Kebijakan Pengembalian dan Garansi -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h4>Kebijakan Pengembalian dan Garansi</h4>
                <p>
                    Kami memberikan garansi kualitas untuk semua produk yang dijual. Untuk informasi lebih lanjut tentang kebijakan pengembalian, silakan lihat halaman Kebijakan Pengembalian kami.
                </p>
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