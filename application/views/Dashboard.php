<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url(); ?>gaweshop/Tensura.gif" alt="Logo" width="38" height="32" class="d-inline-block align-text-top">
                Gaωe World
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Kembali</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Container -->
    <div class="container mt-5">
        <div class="jumbotron bg-secondary text-white p-0 position-relative">
            <img src="<?php echo base_url(); ?>gaweshop/Gameds.gif" alt="Logo" width="1300" height="320" class="d-inline-block align-text-top">
            <div class="position-absolute top-0 start-0 text-center w-100">
                <h1 class="text-danger-emphasis">Welcome to Gaωe World!</h1>
                <p class="lead">Murah Meriah, Aman dan Terpercaya !!</p>
            </div>
        </div>
        
        

        <div class="row">
            <!-- Carousel Column -->
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="1500">
                            <img src="<?php echo base_url(); ?>gaweshop/HI.png" class="d-block w-85" alt="Honkai Impact">
                        </div>
                        <div class="carousel-item" data-bs-interval="2500">
                            <img src="<?php echo base_url(); ?>gaweshop/Twice.png" class="d-block w-85" alt="Fortnite">
                        </div>
                        <div class="carousel-item" data-bs-interval="2500">
                            <img src="<?php echo base_url(); ?>gaweshop/PS.png" class="d-block w-85" alt="Game">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
            </div>

            <!-- Form Column -->
            <div class="col-md-6">
                <br>
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email Anda">
                                <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah membagikan email Anda kepada orang lain.</small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Kata sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Kata Sandi Anda">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                        </form>
                        <br>
                        <div class="mt-3 text-center">
                            <p class="mb-0">Belum punya akun?</p>
                            <a href="#" class="btn btn-success btn-sm">Daftar</a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
    </div>
    <div class="mt-3 text-center">
        <p>Butuh Bantuan</p>
        <a href="#" class="btn btn-success btn-sm">Lihat Pusat Bantuan</a>
    </div>
 
</body>
</html>
