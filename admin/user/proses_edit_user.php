<?php 
include 'koneksi.php';
$UserID = $_POST['UserID'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];

$sql = "UPDATE user SET Username='$Username',Password='$Password',Email='$Email',NamaLengkap='$NamaLengkap',Alamat='$Alamat',Level='$Level' WHERE UserID= '$UserID' ";
$result = mysqli_query($koneksi, $sql);

if ($result) {
?>
<script>
    window.location.assign('user.php');
    alert('Data BERHASIL diupdate');
</script>
<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
?>