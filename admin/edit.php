<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>

<link rel="stylesheet" href="../css/edit_admin.css">
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

	<h2>Edit Data</h2>
	<br/>
	<br/>
	
	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from jadwal_rapat where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<div class="container2">
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Judul</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="judul" value="<?php echo $d['judul']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tempat</td>
					<td><input type="text" required name="tempat" value="<?php echo $d['tempat']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td><input type="date" required name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
				</tr>
				<tr>
					<td>waktu</td>
					<td><input type="text" required name="waktu" value="<?php echo $d['waktu']; ?>"></td>
				</tr>
				<tr>
					<td>Pengundang</td>
					<td><input type="text" required name="pengundang" value="<?php echo $d['pengundang']; ?>"></td>
				</tr>
				<tr>
					<td>Agenda</td>
					<td><input type="text" required class="agenda" name="agenda" value="<?php echo $d['agenda']; ?>"></td>
				</tr>
				<td>Keterangan</td>
					<td><input type="text" required class="agenda" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
				</tr>

				<td class="button"><input class="tombol" type="submit" value="SIMPAN" onClick="return confirm('simpan jadwal?')"> 
				<input class="tombol" type="reset" value="SEBELUMNYA">
				<input class="tombol" type="submit" value="BATAL">
				</td>
					
			</table>
		</form>
	</div>
		<?php 
	}
	?>
 
 <footer>

<small>Copyright &copy; 2021 - All Rights Reserved.</small>

</footer>

</body>
</html>