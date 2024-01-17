<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['Level'] == "") {
    header("location:../index.php?pesan=info_login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="content mt-3">
            <div class="card bg-success bg-gradient">
                <div class="card-body">
                    <a href="#" class="btn text-light">Dashboard</a>
                    <a href="#" class="btn text-light">Kategori Buku</a>
                    <a href="#" class="btn text-light">Buku</a>
                    <a href="user/user.php" class="btn text-light">Users</a>
                    <a href="#" class="btn text-light">Peminjaman</a>
                    <a href="#" class="btn text-light">Laporan Peminjaman</a>
                    <a href="../logout.php" class="btn text-light">Logout</a>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body bg-warning text-center">
                            <h3>Data Buku</h3>
                            <h2>3</h2>
                            <hr>
                            <a href="buku/buku.php" class="btn btn-dark btn-sm">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body bg-danger text-center">
                            <h3>Kategori Buku</h3>
                            <h2>3</h2>
                            <hr>
                            <a href="#" class="btn btn-dark btn-sm">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body bg-info text-center">
                            <h3>Users</h3>
                            <h2>3</h2>
                            <hr>
                            <a href="user/user.php" class="btn btn-dark btn-sm">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body bg-primary text-center">
                            <h3>Peminjaman</h3>
                            <h2>3</h2>
                            <hr>
                            <a href="" class="btn btn-dark btn-sm">Lihat Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="card">
                <div class="card-body">
                    <p>Halo <b>
                            <?php echo $_SESSION['Username']; ?>
                        </b> Anda telah login sebagai <b>
                            <?php echo $_SESSION['Level']; ?>
                        </b>.</p>
                </div>
            </div>
        </div>
        <div class="content mt-3">
           <p class="text-center">@2023 Aplikasi Perpustakaan Digital By. Nisa'ul Khoiroh</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>