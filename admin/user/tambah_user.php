<h5>Halaman Tambah Data User.</h5>
<a href="?url=user" class="btn btn-outline-primary">KEMBALI</a>
<hr>
<form method="post" action="proses_tambah_user.php">
    <div class="mb-2">
        <label>Username</label>
        <input type="text" name="Username" id="Username" class="form-control" required>
    </div>
    <div class="mb-2">
        <label>Password</label>
        <input type="text" name="Password" id="Password" class="form-control" required>
    </div>
    <div class="mb-2">
        <label>Email</label>
        <input type="Email" name="Email" id="Email" class="form-control" required>
    </div>
    <div class="mb-2">
        <label>NamaLengkap</label>
        <input type="text" name="NamaLengkap" id="NamaLengkap" class="form-control" required>
    </div>
    <div class="mb-2">
        <label>Alamat  </label>
        <input type="text" name="Alamat" id="Alamat" class="form-control" required>
    </div>
    <div class="mb-2">
        <label>Level</label>
        <input type="number" name="Level" id="Level" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-outline-primary">SIMPAN</button>
        <button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
    </div>
</form>