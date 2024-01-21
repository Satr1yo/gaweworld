<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Produk</title>
    <link rel="icon" href="<?= base_url('assets/') ?>img/GaweWorld.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ntegrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <title>Gaωe World</title>

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
                        <a class="nav-link text-danger" href="<?= base_url('dashboard/keranjang'); ?>">Keranjang</a>
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
            <!-- Category Dropdown -->
            <div class="form-group">
                <label for="categorySelect">Pilih Kategori:</label>
                <select class="form-control" id="categorySelect" onchange="updateContent(this.value)">
                    <option value="topup" id="top">Top Up</option>
                    <option value="voucher">Voucher</option>
                    <option value="akun">Akun</option>
                    <option value="koingame">Koin Game</option>
                    <option value="item">Item</option>
                    <option value="consol">Consol</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <!-- Produk -->
            <div id="dynamicContent">
                <!-- The dynamic content will be inserted here based on the selected category -->
            </div>
        </div>

        <!-- JavaScript to update content dynamically -->
        <script>
            // Function to update content based on the selected category
            function updateContent(category) {
                // Get the element to insert content into
                var dynamicContent = document.getElementById('dynamicContent');

                // Clear previous content
                dynamicContent.innerHTML = '';

                // Update content based on the selected category using Bootstrap components

                if (category === 'topup') {
                    dynamicContent.innerHTML += `
                <h2 class="mb-4">Top Up Free Fire</h2>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/freefire.png" alt="Logo" width="1110" height="200" class="d-inline-block align-text-top">
                </div>
                <br>
                <div class="row">
                    <!-- Add voucher products for Steam -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">140 Diamonds</h5>
                                <p class="card-text">Harga: Rp.20.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">355 Diamonds</h5>
                                <p class="card-text">Harga: Rp.50.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">720 Diamonds</h5>
                                <p class="card-text">Harga: Rp.100.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">1450 Diamonds</h5>
                                <p class="card-text">Harga: Rp.200.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">7290 Diamonds</h5>
                                <p class="card-text">Harga: Rp.1.000.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">73100 Diamonds</h5>
                                <p class="card-text">Harga: Rp.10.000.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more voucher products as needed -->
                </div>


                <h2 class="mb-4">Top Up Point Blank</h2>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/pb.png" alt="Logo" width="1110" height="200" class="d-inline-block align-text-top">
                </div>
                <br>
                <div class="row">
                    <!-- Add voucher products for Steam -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">1200 PB CASH</h5>
                                <p class="card-text">Harga: Rp.11.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">2400 PB CASH</h5>
                                <p class="card-text">Harga: Rp.22.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">6000 PB CASH</h5>
                                <p class="card-text">Harga: Rp.55.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">12000 PB CASH</h5>
                                <p class="card-text">Harga: Rp.110.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">24000 PB CASH</h5>
                                <p class="card-text">Harga: Rp.220.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">36000 PB CASH</h5>
                                <p class="card-text">Harga: Rp.330.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more voucher products as needed -->
                </div>`;



                } else if (category === 'voucher') {
                    dynamicContent.innerHTML += `
            <h2 class="mb-4">Voucher Xbox Gift card (US)</h2>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/xbox.png" alt="Logo" width="1110" height="200" class="d-inline-block align-text-top">
                </div>
                <br>
                <div class="row">
                    <!-- Add voucher products for Steam -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Xbox Live Gift Card US$5</h5>
                                <p class="card-text">Harga: Rp. 81.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Xbox Live Gift Card US$15</h5>
                                <p class="card-text">Harga: Rp. 243.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Xbox Live Gift Card US$25</h5>
                                <p class="card-text">Harga: Rp. 405.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Xbox Live Gift Card US$50</h5>
                                <p class="card-text">Harga: Rp. 810.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more voucher products as needed -->
                </div>


                <h2 class="mb-4">Nitendo eShop (US)</h2>
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/nitendo.png" alt="Logo" width="1110" height="200" class="d-inline-block align-text-top">
                </div>
                <br>
                <div class="row">
                    <!-- Add voucher products for Steam -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nintendo eShop Card US$20</h5>
                                <p class="card-text">Harga: Rp. 326.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nintendo eShop Card US$50</h5>
                                <p class="card-text">Harga: Rp. 815.000</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">90 Days Nintendo Switch Online Membership (US)</h5>
                                <p class="card-text">Harga: Rp. 144.744</p>
                                <a href="#" class="btn btn-primary">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more voucher products as needed -->
                </div>`;
                } else if (category === 'akun') {
                    dynamicContent.innerHTML += `
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>`;
                } else if (category === 'koingame') {
                    dynamicContent.innerHTML += `
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>`;
                } else if (category === 'item') {
                    dynamicContent.innerHTML += `
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>`;
                } else if (category === 'consol') {
                    dynamicContent.innerHTML += `
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>`;
                }

                // Add more categories and customize as needed
            }

            updateContent('topup');
        </script>

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