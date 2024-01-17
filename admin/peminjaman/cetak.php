<?php
include 'koneksi.php';
?>

<?php

// if(isset($_POST['simpan'])){
//   $UserID =($_POST['UserID']);
//$BukuID =($_POST['BukuID']);
//$TanggalPeminjaman =($_POST['TanggalPeminjaman']);
//$TanggalPengembalian =($_POST['TanggalPengembalian']);
//$StatusPeminjaman =($_POST['StatusPeminjaman']);

//$sql = "INSERT INTO peminjaman(UserID,BukuID,TanggalPeminjaman,TanggalPengembalian,StatusPeminjaman) VALUES ('$UserID','$BukuID','$TanggalPeminjaman','$TanggalPengembalian','$StatusPeminjaman')";
//$result = mysqli_query($koneksi, $sql);

// if ($result) {
?>
<script>
    //window.location.assign('Peminjaman.php?url=index');
    //alert('Data BERHASIL ditambahkan');
    //
</script>
<?php
// }else {
// echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
//}
//}
// 

?>
<?php
//$TanggalPeminjaman = date('Y-m-d');
//$d = date("Y-m-d", date($TanggalPeminjaman . " +5 Days"));
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Peminjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h4 class="text-center py-2"> Buku</h4>
    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Data
                    </button>

                    <button><a Ttarget="_blank"href="./cetak.php">CETAK</a></button><br><br>

                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Judul</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = "SELECT * FROM peminjaman AS pj JOIN user AS us ON pj.UserID=us.UserID JOIN buku AS bu ON pj.BukuID =bu.BukuID";
                        $result = mysqli_query($koneksi, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $row['NamaLengkap']; ?>
                                </td>
                                <td>
                                    <?= $row['Judul']; ?>
                                </td>
                                <td>
                                    <?= $row['TanggalPeminjaman']; ?>
                                </td>
                                <td>
                                    <?= $row['TanggalPengembalian']; ?>
                                </td>
                                <td>
                                    <?= $row['StatusPeminjaman']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary"
                                        href="hapus_peminjaman.php?PeminjamanID=<?= $row['PeminjamanID']; ?>"
                                        role="button">Kembalikan</a>
                                    <a class="btn btn-danger"
                                        href="hapus_peminjaman.php?PeminjamanID=<?= $row['PeminjamanID']; ?>" role="button"
                                        onclick="return confirm('yakin ingin menghapus ini?');">hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Halaman Pinjam</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="transaksi_pinjam.php" method="POST">
                        <form>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="UserID">
                                    <option selected>Pilih Nama Peminjam</option>
                                    <?php
                                    include 'koneksi.php';
                                    $sql = "SELECT * FROM user";
                                    $data = mysqli_query($koneksi, $sql);
                                    while ($row = mysqli_fetch_array($data)) {
                                        ?>
                                        <option value="<?= $row['UserID']; ?>">
                                            <?= $row['NamaLengkap']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="BukuID">
                                    <option selected>Pilih Buku</option>
                                    <?php
                                    include 'koneksi.php';
                                    $sql = "SELECT * FROM buku";
                                    $data = mysqli_query($koneksi, $sql);
                                    while ($result = mysqli_fetch_array($data)) {
                                        ?>
                                        <option value="<?= $result['BukuID']; ?>">
                                            <?= $result['Judul']; ?> -
                                            <?= $result['Penerbit']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="TanggalPeminjaman" class="form-label">Tanggal Peminjaman</label>
                                <input type="int" class="form-control" value="<?php echo date("Y-m-d"); ?>"
                                    name="TanggalPeminjaman" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="TanggalPengembalian" class="form-label">Tanggal Pengembalian</label>
                                <input type="int" class="form-control"
                                    value="<?php echo date("Y-m-d", strtotime(" + 5 days")) ?>" id="TanggalPengembalian"
                                    name="TanggalPengembalian" readonly>
                            </div>
                            <div class="mb-3">

                                <input type="hidden" class="form-control" name="StatusPeminjaman" readonly>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                </div>
                </form>
            </div>
        </div>
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