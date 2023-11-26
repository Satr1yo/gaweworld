<!DOCTYPE html>
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
                <img src="<?= base_url('assets/'); ?>img/GaweWorld.png" alt="Logo" width="48" height="36" class="d-inline-block align-text-top">
                <span class="text-danger font-weight-bold">Gaωe World</span>
            </a>

        </div>
    </nav>

    <!-- Content Container -->
    <div class="container mt-5">


        <div class="row">
            <!-- Carousel Column -->
            <div class="col-md-6">
                <!-- Ganti dengan gambar statis -->
                <img src="image/GaweWorldLogin.png" class="d-block w-100" alt="Your Image">
            </div>

            <!-- Form Column -->
            <div class="col-md-6">
                <br>
                <div class="card-body">
                    <h2 class="card-title text-center ">Daftar</h2>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="form group row">
                            <div class="col-sm-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Kata sandi</label>
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Masukkan Kata Sandi Anda">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Kata sandi</label>
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Kata Sandi Anda">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </div>
                    </form>
                    <hr>
                    <br>
                    <div class="mt-3 text-center">
                        <p class="mb-0">Sudah punya akun?</p>
                        <a href="<?= base_url('auth'); ?>" class="btn btn-warning btn-sm">Login</a>
                    </div>
                </div>
            </div>