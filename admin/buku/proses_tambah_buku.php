<?php

if(isset($_POST['simpan'])){
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];

include 'koneksi.php';
$sql = "INSERT INTO buku (Judul,Penulis,Penerbit,TahunTerbit) VALUES('$Judul','$Penulis','$Penerbit','$TahunTerbit')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=buku");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=buku');</script>";
}
}