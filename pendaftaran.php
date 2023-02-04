<!DOCTYPE html>
<html>
<head>
	<title>tampil daftar</title>
</head>
<body>
	
	
</body>
</html>
	<?php
		include "koneksi.php";

	?>
	<h2>DAFTAR</h2>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Tanggal</td>
			<td>Alamat</td>
		</tr>
	<?php
		$tampil= mysqli_query($mysqli, "select * from pendaftaran");
		$no = 1;
		
		while($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['email']; ?></td>
		<td><?php echo $hasil['tanggal_lahir']; ?></td>
		<td><?php echo $hasil['alamat']; ?></td>
		<td>
			
			
		</td>
	</tr>
	<?php
}
?>
</table>
<a href="index.php">LOG OUT</a>