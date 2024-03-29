<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/'); ?>img/GaweWorld.png" alt="Logo" width="48" height="36" class="d-inline-block align-text-top">
            <span class="text-danger font-weight-bold">Gaωe World</span>
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-danger font-weight-bold" href="<?= base_url('auth'); ?>">Kembali</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Content Container -->
<div class="container mt-5">
    <div class="row justify-content-center"> <!-- Menggunakan justify-content-center untuk membuat row berada di tengah -->
        <!-- Form Registrasi Column -->
        <div class="col-md-6">
            <br>
            <div class="card-body">
                <h2 class="card-title text-center">Daftar</h2>
                <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                    <!-- Form Registrasi Content -->
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Username Anda" value="<?= set_value('name'); ?>">
                        <small class="text-danger"><?= form_error('name'); ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email Anda" value="<?= set_value('email'); ?>">
                        <small class="text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Kata Sandi Anda">
                        <small class="text-danger"><?= form_error('password'); ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputConfirmPassword" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Konfirmasi Kata Sandi Anda">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Saya setuju dengan Syarat dan Ketentuan</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">Daftar</button>
                    </div>
                </form>
                <br>
                <div class="mt-3 text-center">
                    <p class="mb-0">Sudah punya akun?</p>
                    <a href="#" class="btn btn-warning btn-sm">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>