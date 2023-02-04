<!DOCTYPE html>
<html>
<head>
	<title>tambah event</title>
</head>
<body>
	<p>Selamat Datang Di Halaman Event | SMK Luqman Al Hakim Kudus</p>
	<hr>
	<form action="proses_tambah_event.php" method="POST">
	<fieldset>
		<legend>Event</legend>
		<table cellpadding="0" cellspacing="9" bgcolor="#B0C4DE" width="50%">
			<tr>
				<td><label>Nama :</label></td>
				<td><input type="text" name="nama" placeholder="mohon diisi.." required></td>
			</tr>
			<tr>
				<td><label>Tanggal :</label></td>
				<td><input type="date" name="tanggal" placeholder="mohon diisi.." required></td>
			</tr>
			<tr>
				<td><label>Informasi :</label></td>
				<td><input type="text" name="informasi" placeholder="mohon diisi.." required></td>
			</tr>
			<tr>
				<td><input type="submit" name="masuk" value="login" required></td>
			</tr>
		</table>
		<a href="admin.php"></a>
	</fieldset>
</form>
<hr>
			<div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>
