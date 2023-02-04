<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Selamat Datang Di Halaman Admin | SMK Luqman Al Hakim Kudus</p>
	<hr>
	<a href="tambah_event.php">+ tambah event</a>|
	<a href="tampil_pendaftaran.php">+ tambah pendaftaran</a>
</body>
</html>
	<?php
		include "koneksi.php";

	?>
	<h2>ADMIN</h2>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>nama</td>
			<td>tanggal</td>
			<td>Informasi</td>
			<td>Opsi</td>
		</tr>
	<?php
		$tampil= mysqli_query($mysqli, "select * from admin");
		$no = 1;
		
		while($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['tanggal']; ?></td>
		<td><?php echo $hasil['informasi']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $hasil['id']; ?>">edit</a>
			<a href="hapus.php?hapus&id=<?= $hasil['id']; ?>">hapus</a>
			
		</td>
	</tr>
	<?php
}
?>

	</table>
<a href="index.php">LOG OUT</a>