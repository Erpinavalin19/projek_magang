<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="../../css/user_style.css">
</head>
<body>

<div class="container1">

<h1>Meeting Schedule</h1>

</div>

<header>
<div class="container">

<img class="gambar" src="../../picture/logouser.png" alt="user">
<br />
<p>Hi Admin</p>
<ul>
<li ><a href="../halaman_admin.php"><i class="fas fa-home"></i>	Home</a></li>
<li><i class="fas fa-check"></i><a href="user/data_user.php"><i class="fas fa-users"></i>	User</a></li>
<li><a href="cari_user.php"><i class="fas fa-search"></i>Search</a></li>
<li><a href="../../logout.php" onClick="return confirm('anda yakin ingin keluar?')"><i class="fas fa-lock"></i>	LogOut</a></li>
</ul>

</div>
</header>

<div class="container3">

	<br/>
	<button class="tambah">
	<a href="tambahuser.php?id=28">+ user</a>
	</button>
	<br/>
	<br/>
<center>
	<table>
		<tr>
			<th>NO</th>
			<th>nama</th>
			<th>username</th>
			<th>Bagian</th>
			<th></th>
			<th>OPSI</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		
			?>
			

		<?php 


				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from user");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$jadwal_rapat = mysqli_query($koneksi,"select * from user limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($jadwal_rapat)){
		?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td>
				
				
				<?php echo $d['nama']; ?>
				</td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['level']; ?></td>
				<td><a href="#">change password</a></td>
				
				<td>
					<a href="edituser.php?id=<?php echo $d['id']; ?>"><i class="fas fa-edit"></i></a>
                    <a href="hapususer.php?id=<?php echo $d['id']; ?>" onClick="return confirm('anda yakin ingin hapus data user?')"><i class="fas fa-eraser"></i></a>
				</td>
			</tr>
			<?php 
		}
		?>

	</table>

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

		<h3 id="jumlahdata"> Jumlah data : <b><?php echo $jumlah_data; ?> </b></h3>
		</center>	


		</div>
<footer>

<small>Copyright &copy; 2021 - All Rights Reserved.</small>

</footer>

</body>
</html>