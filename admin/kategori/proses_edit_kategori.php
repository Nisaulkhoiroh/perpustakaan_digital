<?php 
include 'koneksi.php';
$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];

$sql = "UPDATE kategoribuku SET NamaKategori='$NamaKategori' WHERE KategoriID= '$KategoriID' ";
$result = mysqli_query($koneksi, $sql);

if ($result) {
?>
<script>
    window.location.assign('kategori.php');
    alert('Data BERHASIL diupdate');
</script>
<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
?>