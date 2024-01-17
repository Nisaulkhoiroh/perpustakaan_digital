<h5>Halaman Tambah Data Buku.</h5>
<a href="?url=buku" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="proses_tambah_buku.php">
    <div class="mb-2">
        <label>Judul</label>
        <input type="text" name="Judul" class="form-control" id="Judul" required>
    </div>
    <div class="mb-2">
        <label>Penulis</label>
        <input type="text" name="Penulis" class="form-control" id="Penulis" required>
    </div>
    <div class="mb-2">
        <label>Penerbit</label>
        <input type="text" name="Penerbit" class="form-control" id="Penerbit" required>
    </div>
    <div class="mb-2">
        <label>TahunTerbit  </label>
        <input type="number" name="TahunTerbit" class="form-control" id="TahunTerbit" required>
    </div>
    <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-outline-primary">SIMPAN</button>
        <button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
    </div>
</form>