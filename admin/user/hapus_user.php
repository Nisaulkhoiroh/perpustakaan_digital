<?php

$UserID = $_GET['UserID'];

include 'koneksi.php';
$sql = "DELETE FROM `user` WHERE `UserID`='$UserID'";
$query = mysqli_query($koneksi, $sql);
if($query){
    ?>
    <script>
        window.location.assign('user.php');
        alert('Data Berhasil Dihapus');
    </script>
    <?php
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=user');</script>";
}