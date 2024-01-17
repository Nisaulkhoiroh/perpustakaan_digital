<?php

if(isset($_POST['simpan'])){
$Judul = $_POST['NamaKategori'];

include 'koneksi.php';
$sql = "INSERT INTO kategoribuku (NamaKategori) VALUES('$NamaKategori')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=kategori");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=kategori');</script>";
}
}