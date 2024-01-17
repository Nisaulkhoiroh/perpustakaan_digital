<?php
$BukuID = $_GET['BukuID'];
include 'koneksi.php';
$sql = "SELECT*FROM `buku` WHERE `BukuID`='$BukuID'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit buku.</h5>
<a href="?url=buku" class="btn btn-primary"> KEMBALI </a>
<hr>
<form action="proses_edit_buku.php" method="POST" enctype="multipart/form-data`">
                                        <form>
                                            <div class="mb-3">
                                                <label for="BukuID" class="form-label">BukuID</label>
                                                <input type="number" class="form-control" id="BukuID" name="BukuID"
                                                    value="<?php echo $data['BukuID']; ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="Judul" class="form-label">Judul</label>
                                                <input type="text" class="form-control" id="Judul" name="Judul"
                                                    value="<?php echo $data['Judul']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Penulis" class="form-label">Penulis</label>
                                                <input type="text" class="form-control" id="Penulis" name="Penulis"
                                                    value="<?php echo $data['Penulis']; ?>" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="Penerbit" class="form-label">Penerbit</label>
                                                <input type="text" class="form-control" id="Penerbit" name="Penerbit"
                                                    value="<?php echo $data['Penerbit']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="TahunTerbit" class="form-label">TahunTerbit</label>
                                                <input type="text" class="form-control" id="TahunTerbit"
                                                    name="TahunTerbit" value="<?php echo $data['TahunTerbit']; ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" 
                                                    class="btn btn-primary">Simpan</button>
                                            </div>

                                </div>
                                </form>