<!DOCTYPE html>
<html>
<head>
	<title>Cari data</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="../css/utama_style.css">
<style>
.search {
	width: 100%;
	margin-left: -100px;
}

.menu {
	margin: 10px;
	margin-right: 20px;
	text-align: right;
	display: block;
	padding-top:20px;
}

</style>
</head>
<body>
<div class="container1">

<?php 
		include '../koneksi2.php';
			?>

<form class="cari" action="cari.php" method="get">
<input class="search" type="text" name="cari" placeholder="Search...">
<input class="button" type="submit" value="cari">
</form>

<?php
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
}

?>

</div>
<header>
<div class="container">

<br />

</div>
</header>


<div class="container3">

<p class="menu"><a href="halaman_pegawai.php">Home</a> 	//	 <a href="../logout.php" onClick="return confirm('anda yakin ingin keluar?')">	LogOut</a></p>

	<br/>
	
	<br/>
	<br/>

	<table>
		<tr>
			<th>NO</th>
			<th>Judul</th>
			<th>Tempat</th>
			<th>Hari/Tanggal</th>
			<th>Waktu</th>
			<th>Pengundang</th>
			<th>Agenda</th>
			
		</tr>

		<?php

if(ISSET($_GET['cari'])) {
	$cari = $_GET['cari'];
	$data = mysqli_query($kon,"select * from jadwal_rapat where judul like '%".$cari."%'");
} else {
	$data = mysqli_query($kon, "select * from jadwal_rapat");
}

$no = 1;
while($d = mysqli_fetch_array($data)){
	?>

			<tr>
			<td><?php echo $no++; ?></td>
				<td>
				
				<a href="detail.php" onclick='javascript:alert()'>
				<?php echo $d['judul']; ?> </a>
				</td>
				<td><?php echo $d['tempat']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['waktu']; ?></td>
				<td><?php echo $d['pengundang']; ?></td>
				<td><?php echo $d['agenda']; ?></td>
				
			</tr>
			<?php 
		}
		?>

	</table>
	

<footer>

<small>Copyright &copy; 2021 - All Rights Reserved.</small>

</footer>
</div>

</body>
</html>