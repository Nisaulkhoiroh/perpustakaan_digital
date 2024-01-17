<?php

if(isset($_POST['simpan'])){
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];

include 'koneksi.php';
$sql = "INSERT INTO `user` (Username,Password,Email,NamaLengkap,Alamat,Level) VALUES('$Username','$Password','$Email','$NamaLengkap','$Alamat','$Level')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=user");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=user');</script>";
}
}