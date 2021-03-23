<!DOCTYPE html>
<html>
<head>
	<title>Cari user</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="../../css/utama_style.css">
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
		include '../../koneksi2.php';
			?>

<form class="cari" action="cari_user.php" method="get">
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

<p class="menu"><a href="data_user.php">Home</a> 	//	 <a href="../../logout.php" onClick="return confirm('anda yakin ingin keluar?')">LogOut</a></p>

	<br/>
	
	<br/>
	<br/>

	<table>
		<tr>
            <th>NO</th>
			<th>nama</th>
			<th>username</th>
			<th>Bagian</th>
			
		</tr>

		<?php

if(ISSET($_GET['cari'])) {
	$cari = $_GET['cari'];
	$data = mysqli_query($kon,"select * from user where nama like '%".$cari."%'");
} else {
	$data = mysqli_query($kon, "select * from user");
}

$no = 1;
while($d = mysqli_fetch_array($data)){
	?>

			<tr>
			<td><?php echo $no++; ?></td>
				<td>
				
				<a href="detail.php" onclick='javascript:alert()'>
				<?php echo $d['nama']; ?> </a>
				</td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['level']; ?></td>
				
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