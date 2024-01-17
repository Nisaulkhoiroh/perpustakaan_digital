<?php
$UserID = $_GET['UserID'];
include 'koneksi.php';
$sql = "SELECT*FROM `user` WHERE `UserID`='$UserID'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit user.</h5>
<a href="?url=user" class="btn btn-primary"> KEMBALI </a>
<hr>
<form action="proses_edit_user.php" method="POST" enctype="multipart/form-data`">
                                        <form>
                                            <div class="mb-3">
                                                <label for="UserID" class="form-label">id </label>
                                                <input type="text" class="form-control" id="UserID" name="UserID"
                                                    value="<?php echo $data['UserID']; ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="Username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="Username" name="Username"
                                                    value="<?php echo $data['Username']; ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="Password" class="form-label">Password</label>
                                                <input type="text" class="form-control" id="Password" name="Password"
                                                    value="<?php echo $data['Password']; ?>" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="Email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="Email" name="Email"
                                                    value="<?php echo $data['Email']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="NamaLengkap" class="form-label">NamaLengkap</label>
                                                <input type="text" class="form-control" id="NamaLengkap"
                                                    name="NamaLengkap" value="<?php echo $data['NamaLengkap']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="Alamat" name="Alamat"
                                                    value="<?php echo $data['Alamat']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Level" class="form-label">Level</label>
                                                <input type="text" class="form-control" id="Level" name="Level"
                                                    value="<?php echo $data['Level']; ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" 
                                                    class="btn btn-primary">Simpan</button>
                                            </div>

                                </div>
                                </form>