<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game News</title>
    <link rel="icon" href="<?= base_url('assets/') ?>img/GaweWorld.png" type="image/x-icon">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link text-danger" href="#">Keranjang</a>
                    </li>
                    <li class="nav-item">
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

    <div class="container mt-5">
        <div class="row">
            <!-- Example 1 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/ys.jpg" class="card-img-top" alt="Game News Image">
                    <div class="card-body">
                        <h5 class="card-title">New Action RPG Launches Worldwide</h5>
                        <p class="card-text">Experience the thrill of a brand new action RPG that has just been released globally. Dive into a captivating story and explore a vast open world.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Published on November 26, 2023
                    </div>
                </div>
            </div>

            <!-- Example 2 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/esport.png" class="card-img-top" alt="Game News Image">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming eSports Tournament Announced</h5>
                        <p class="card-text">Get ready for an adrenaline-pumping eSports competition! A major tournament featuring top players from around the world has just been announced.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Published on November 25, 2023
                    </div>
                </div>
            </div>

            <!-- Example 3 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/gaben.jpg" class="card-img-top" alt="Game News Image">
                    <div class="card-body">
                        <h5 class="card-title">Exclusive Interview with Game Developer</h5>
                        <p class="card-text">Gain insights into the world of game development with our exclusive interview with a renowned game developer. Learn about their creative process and upcoming projects.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Published on November 24, 2023
                    </div>
                </div>
            </div>

            <!-- Example 4 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/gu.jpg" class="card-img-top" alt="Game News Image">
                    <div class="card-body">
                        <h5 class="card-title">Major Game Update Adds Exciting Features</h5>
                        <p class="card-text">Discover the latest game update that brings new features, enhancements, and challenges. Players can expect an immersive gaming experience like never before.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Published on November 23, 2023
                    </div>
                </div>
            </div>

            <!-- Example 5 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/ea.png" class="card-img-top" alt="Game News Image">
                    <div class="card-body">
                        <h5 class="card-title">Behind the Scenes of a Popular Game Studio</h5>
                        <p class="card-text">Take a sneak peek behind the scenes of a renowned game studio. Learn about the development process, challenges faced, and the creative minds shaping the gaming industry.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Published on November 22, 2023
                    </div>
                </div>
            </div>

            <!-- Example 6 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="<?= base_url('assets/'); ?>img/vr.jpg" class="card-img-top" alt="Game News Image">
                    <div class="card-body">
                        <h5 class="card-title">Exploring the Future of Virtual Reality in Gaming</h5>
                        <p class="card-text">Dive into the future of gaming with the latest advancements in virtual reality technology. Discover how VR is reshaping the gaming landscape and providing immersive experiences.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Published on November 21, 2023
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
    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>