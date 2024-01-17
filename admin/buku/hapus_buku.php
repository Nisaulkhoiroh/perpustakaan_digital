<?php

$BukuID = $_GET['BukuID'];

include 'koneksi.php';
$sql = "DELETE FROM `buku` WHERE `BukuID`='$BukuID'";
$query = mysqli_query($koneksi, $sql);
if($query){
    ?>
    <script>
        window.location.assign('buku.php');
        alert('Data Berhasil Dihapus');
    </script>
    <?php
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=buku');</script>";
}