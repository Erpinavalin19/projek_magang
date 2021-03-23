<!DOCTYPE html>
<html>
<head>
<title>Selamat datang di website jadwal rapat</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="css/utama_style.css">
</head>
<body>

<div class="logo">

<img src="picture/logopertamina.jpg" alt="logopertamina">

</div>

<div class="container1">

</div>
<header>
<div class="container">
<h1><a href="#">Meeting Schedule</a></h1>
<br />
<ul>
<li><a href="halaman_utama.php">Home</a></li>
<li><a href="index.php">Login</a></li>
<li><a href="cari.php">Searching		<i class="fas fa-search"></i></a></li>
</ul>

</div>
</header>
<div class="pertamina">
<img src="picture/pertamina.jpg" alt="Kilang pertamina">

<div id="deskripsi">

<p>PT Pertamina Persero RU III <br/> Plaju Palembang, is one of <br/>Pertamina's 6 (six)<br/>
Refinery Units with<br/> its main business <br/>activities being processing<br/> crude oil and <br/>
intermediate products <br/>(Alkylfeed, HSDC, slop oil,<br/> LOMC, Long residue, <br/>Raw PP) become 
finished <br/>products, including fuel <br/>(Premium, Kerosene, Solar<br/> &Fuel Oil), NBBM <br/>
(LPG, Musicool, HAP,<br/> LAWS, SBPX, LSWR),<br/> BBK (Avtur, Pertalite,<br/> Pertamax, Pertamax Racing)<br/>
 and other products such as <br/>LSFO and Polypropylene <br/>(Polytam). <a href="#">Lihat selengkapnya</a></p>
 

</div>
</div>

</div>


<div class="container3">

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
		include 'koneksi.php';
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

		<p> Jumlah data : <b><?php echo $jumlah_data; ?> </b></p>
		</center>
	<center><span class="line"></span></center>
<div class="about">
<h3>About</h3>
<p>Application to process meeting schedules
This application still has many drawbacks, and still requires 
development to make this application more multifunctional 
especially in the processing of meeting schedules.
</p>

</div>

<center><span class="line"></span></center>
<div class="about">
<h3>Contact</h3>
<p>Getting in trouble? You can contact the customer service listed:</p>
<br/>
<p>08xxxx-xxxx-xxxx</p>
</br>
<p>021-xxxx-xxxx</p>


</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.379953323897!2d104.82211941428429!3d-2.991883440707308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b77c0c768ed91%3A0xec15dab544161878!2sPertamina!5e0!3m2!1sid!2sid!4v1615908156790!5m2!1sid!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<footer>

<small>Copyright &copy; 2021 - All Rights Reserved.</small>

</footer>
</div>

</body>
</html>