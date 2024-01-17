<!DOCTYPE html>
<html>
<head>
	<title>CRUD User</title>
</head>
<body>
 
	<br/>
	<a href="tambah_user.php">TAMBAH USER</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password </th>
			<th>Email</th>
			<th>NamaLengkap</th>
            <th>Alamat</th>
            <th>Level</th>
            <th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Username']; ?></td>
				<td><?php echo $d['Password']; ?></td>
				<td><?php echo $d['Email']; ?></td>
                <td><?php echo $d['NamaLengkap']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td><?php echo $d['Level']; ?></td>
				<td>
					<a href="edit_user.php?UserID=<?php echo $d['UserID']; ?>">EDIT</a>
					<a href="hapus_user.php?UserID=<?php echo $d['UserID']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>