
<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran</title>
</head>
<body>
	<p>Selamat Datang Di Halaman Pendaftaran | SMK Luqman Al Hakim Kudus</p>
	<hr>
	<form action="proses_pendaftaran.php" method="POST">
	<fieldset>
		<legend>pendaftaran</legend>
		<table cellpadding="0" cellspacing="9" bgcolor="#B0C4DE" width="50%">
			<tr>
				<td><label>Nama :</label></td>
				<td><input type="text" name="nama" placeholder="mohon diisi.." required></td>
			</tr>
			<tr>
				<td><label>Email :</label></td>
				<td><input type="email" name="email" placeholder="mohon diisi.." required></td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir :</label></td>
				<td><input type="date" name="tanggal_lahir" placeholder="mohon diisi.." required></td>
			</tr>
			<tr>
				<td><label>Alamat :</label></td>
				<td><textarea name="alamat" placeholder="mohon diisi.." required></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="masuk" value="login" required></td>
			</tr>
		</table>
		<a href="pendaftaran.php"></a>
	</fieldset>
	<hr>
			<div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</form>

</body>
</html>