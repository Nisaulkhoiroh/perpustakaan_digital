<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
  $UserID = $_POST['UserID'];
  $BukuID = $_POST['BukuID'];

  $TanggalPeminjaman = date("Y-m-d");
  $TanggalPengembalian = date("Y-m-d", strtotime($TanggalPeminjaman ." + 5 days"));
  $StatusPeminjaman = "dipinjam";
  
  $sql = "INSERT INTO peminjaman(UserID,BukuID,TanggalPeminjaman,TanggalPengembalian,StatusPeminjaman) VALUES('$UserID','$BukuID','$TanggalPeminjaman','$TanggalPengembalian','$StatusPeminjaman')";
  $result = mysqli_query($koneksi, $sql);
  if ($result) {
   ?>
<script>
    window.location.assign('peminjaman.php');
    alert('Pinjam Buku Berhasil');
</script>
<?php
  }else {
   echo "Eror :" . $sql ." <br>" . mysqli_errno($koneksi) ;
  }
}elseif (isset($_POST['dikembalikan'])) {
  
}