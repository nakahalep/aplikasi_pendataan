<?php
include "koneksi.php";

$id = $_GET['id'];
$tampil = mysqli_query($mysqli, "select * from admin where id='$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<h2>Edit</h2>
<form action="proses_edit.php" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="hidden" name="id" value="<?php echo $hasil['id']?>"></td>
			<td><input type="text" name="nama" value="<?php echo $hasil['nama']?>"></td>
		</tr>
		<tr>
			<td>Tanggal Event</td>
			<td><input type="date" name="tanggal" value="<?php echo $hasil['tanggal']?>"></td>
		</tr>
		<tr>
			<td>Informasi</td>
			<td><input type="text" name="informasi" value="<?php echo $hasil['informasi']?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="kirim" value="edit"></td>
		</tr>
	</table>
</form>