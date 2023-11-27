<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Akun Pengguna - Game Shop</title>
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
                    <a class="nav-link text-danger" href="<?= base_url('dashboard/keranjang'); ?>">Keranjang</a>
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
        <h2>Akun Pengguna</h2>
        <br>
        <br>
        <!-- Informasi Akun Pengguna -->
        <div class="row">
            <div class="col-md-4">
                <h4>Informasi Akun Pengguna</h4>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Nama Pengguna
                        <span id="userName" class="badge badge-primary badge-pill">Rafly</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Email
                        <span id="userEmail" class="badge badge-primary badge-pill">rafly@gmail.com</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Alamat
                        <span id="userAddress" class="badge badge-primary badge-pill">Jl. Rungkut</span>
                    </li>
                </ul>
                <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#editProfileModal">Ubah Profil</button>
                <button class="btn btn-secondary mt-3" data-toggle="modal" data-target="#changePasswordModal">Ubah Sandi</button>
            </div>
            <div class="col-md-4">
                <h4>Riwayat Pesanan</h4>
                <ul class="list-group">
                    <li class="list-group-item">Pesanan 1 - <strong>Status: Selesai</strong></li>
                    <li class="list-group-item">Pesanan 2 - <strong>Status: Diproses</strong></li>
                    <li class="list-group-item">Pesanan 3 - <strong>Status: Diproses</strong></li>
                    <!-- Tambahkan riwayat pesanan lainnya di sini -->
                </ul>
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" alt="Profile Picture" id="profilePicture" class="img-fluid rounded-circle">
            </div>
        </div>

        <!-- Modal for Profile Editing -->
        <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProfileModalLabel">Ubah Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for Profile Editing -->
                        <form id="profileEditForm">
                            <div class="form-group">
                                <label for="editName">Nama Pengguna</label>
                                <input type="text" class="form-control" id="editName" placeholder="Nama Pengguna">
                            </div>
                            <div class="form-group">
                                <label for="editEmail">Email</label>
                                <input type="email" class="form-control" id="editEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="editAddress">Alamat</label>
                                <input type="text" class="form-control" id="editAddress" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label for="editProfilePicture">Foto Profil (URL)</label>
                                <input type="text" class="form-control" id="editProfilePicture" placeholder="URL Foto Profil">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="submitEditProfile()">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Password Change -->
        <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="changePasswordModalLabel">Ubah Sandi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for Password Change -->
                        <form id="changePasswordForm">
                            <div class="form-group">
                                <label for="currentPassword">Sandi Saat Ini</label>
                                <input type="password" class="form-control" id="currentPassword" placeholder="Sandi Saat Ini">
                            </div>
                            <div class="form-group">
                                <label for="newPassword">Sandi Baru</label>
                                <input type="password" class="form-control" id="newPassword" placeholder="Sandi Baru">
                            </div>
                            <div class="form-group">
                                <label for="confirmNewPassword">Konfirmasi Sandi Baru</label>
                                <input type="password" class="form-control" id="confirmNewPassword" placeholder="Konfirmasi Sandi Baru">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="submitChangePassword()">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Function to handle profile editing
            function submitEditProfile() {
                // Get values from the form
                var newName = document.getElementById('editName').value;
                var newEmail = document.getElementById('editEmail').value;
                var newAddress = document.getElementById('editAddress').value;
                var newProfilePicture = document.getElementById('editProfilePicture').value;

                // Update profile data
                userProfileData.name = newName || userProfileData.name;
                userProfileData.email = newEmail || userProfileData.email;
                userProfileData.address = newAddress || userProfileData.address;

                // Update profile information on the page
                document.getElementById('userName').innerText = userProfileData.name;
                document.getElementById('userEmail').innerText = userProfileData.email;
                document.getElementById('userAddress').innerText = userProfileData.address;

                // Update profile picture
                if (newProfilePicture) {
                    document.getElementById('profilePicture').src = newProfilePicture;
                }

                // Close the modal
                $('#editProfileModal').modal('hide');
            }

            // Function to handle password change
            function submitChangePassword() {
                // Get values from the form
                var currentPassword = document.getElementById('currentPassword').value;
                var newPassword = document.getElementById('newPassword').value;
                var confirmNewPassword = document.getElementById('confirmNewPassword').value;

                // Implement your logic for password change here
                if (currentPassword && newPassword && confirmNewPassword) {
                    // For demonstration purposes, let's simply show an alert
                    alert("Password changed successfully!");
                    // Close the modal
                    $('#changePasswordModal').modal('hide');
                } else {
                    alert("Please fill in all fields.");
                }
            }
        </script>

        <!-- Logout -->
        <div class="row mt-4">
            <div class="col-md-12">
                <a href="#" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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