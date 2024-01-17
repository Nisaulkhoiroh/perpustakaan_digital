<?php
$BukuID = $_GET['KategoriID'];
include 'koneksi.php';
$sql = "SELECT*FROM kategoribuku WHERE KategoriID='$KategoriID'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit buku.</h5>
<a href="?url=buku" class="btn btn-primary"> KEMBALI </a>
<hr>
<form action="proses_edit_kategori.php" method="POST" enctype="multipart/form-data`">
                                        <form>
                                            <div class="mb-3">
                                                <label for="KategoriID" class="form-label">KategoriID</label>
                                                <input type="number" class="form-control" id="KategoriID" name="KategoriID"
                                                    value="<?php echo $data['KategoriID']; ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="NamaKategori" class="form-label">NamaKategori</label>
                                                <input type="text" class="form-control" id="NamaKategori" name="NamaKategori"
                                                    value="<?php echo $data['NamaKategori']; ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" 
                                                    class="btn btn-primary">Simpan</button>
                                            </div>

                                </div>
                                </form>