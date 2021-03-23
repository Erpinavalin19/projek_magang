<!DOCTYPE html>
<html>
<head>
	<title>Hi Admin!</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<div class="container1">

<h1>Meeting Schedule</h1>

</div>

<header>
<div class="container">

<img class="gambar" src="../picture/logouser.png" alt="user">
<br />
<p>Hi Admin</p>
<ul>
<li><i class="fas fa-check"></i><a href="halaman_admin.php"><i class="fas fa-home"></i>	Home</a></li>
<li><a href="user/data_user.php"><i class="fas fa-users"></i>	User</a></li>
<li><a href="cari.php"><i class="fas fa-search"></i>Search</a></li>
<li><a href="../logout.php" onClick="return confirm('anda yakin ingin keluar?')"><i class="fas fa-lock"></i>	LogOut</a></li>
</ul>

</div>
</header>

<div class="container3">

	<br/>
	<button class="tambah">
	<a href="tambah.php">+ Jadwal</a>
	</button>
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
			<th>OPSI</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		
			?>

		<?php 

				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from jadwal_rapat");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$jadwal_rapat = mysqli_query($koneksi,"select * from jadwal_rapat limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($jadwal_rapat)){
		?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td>
				
				<a href="#">
				<?php echo $d['judul']; ?> </a>
				</td>
				<td><?php echo $d['tempat']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['waktu']; ?></td>
				<td><?php echo $d['pengundang']; ?></td>
				<td><?php echo $d['agenda']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>"><i class="fas fa-edit"></i></a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>" onClick="return confirm('anda yakin ingin hapus jadwal?')"><i class="fas fa-eraser"></i></a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>
<center>
	<nav>
			<ul class="pagination justify-content-center">
				
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>

		<h3> Jumlah data : <b><?php echo $jumlah_data; ?> </b></h3>
		</center>

		</div>
<footer>

<small>Copyright &copy; 2021 - All Rights Reserved.</small>

</footer>

</body>
</html>