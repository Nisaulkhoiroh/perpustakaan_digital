<?php 
include 'koneksi.php';
$BukuID = $_POST['BukuID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];

$sql = "UPDATE buku SET Judul='$Judul',Penulis='$Penulis',Penerbit='$Penerbit',TahunTerbit='$TahunTerbit' WHERE BukuID= '$BukuID' ";
$result = mysqli_query($koneksi, $sql);

if ($result) {
?>
<script>
    window.location.assign('buku.php');
    alert('Data BERHASIL diupdate');
</script>
<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
?>