<!DOCTYPE html>
<html>
<head>
	<title>Tambah Jadwal</title>
<link rel="stylesheet" href="../css/tambah_admin.css">
</head>
<body>

<div class="container1"></div>
<header>
<div class="container">
<h1><a href="#">Meeting Schedule</a></h1>
<ul>
<li class="#"><a href="halaman_admin.php">Home</a></li>
<li><a>//</a></li>
<li><a href="logout.php">LogOut</a></li>
</ul>

</div>
 
	<h2>Tambah Jadwal</h2>
	<br/>
	<br/>

<div class="container2">
	<form method="post" action="tambah_aksi.php" onSubmit="return validasi()">
		<table>
			<tr>			
				<td>Judul</td>
				<td><input type="text" name="judul" required /></td>
			</tr>
			<tr>
				<td>Tempat</td>
				<td><input type="text" name="tempat" required></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" required></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td ><input class="time" type="text" name="waktu" required></td>
			</tr>
			<tr>
				<td>Pengundang</td>
				<td><input type="text" name="pengundang" required></td>
			</tr>
			<tr>
				<td>Agenda</td>
				<td><input class="agenda" type="text" name="agenda" required></td>
			</tr>

			<td>Keterangan</td>
				<td><input class="agenda" type="text" name="keterangan" required></td>
			</tr>
			
				
				<td class="button"><input class="tombol" type="submit" value="SIMPAN"> <input class="tombol" type="reset" value="RESET"></td>
					
		</table>
	</form>

	</div>

	<footer>

<small>Copyright &copy; 2021 - All Rights Reserved.</small>

</footer>
</body>
</html>