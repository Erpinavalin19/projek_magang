<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Silahkan Login</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
			<h6><a class="link" href="halaman_utama.php" >< - Kembali</a></h6>
			</center>
		</form>
		
	</div>
	<style>
		p {
			font-size: 12px;
			border: 1px solid;
			width: 15%;
			font-weight: bold;
			background-color: #fff;
			margin-top: -30px;
		}

	</style>
 <p>*Note : Untuk login sebagai admin<br/>Username:admin<br/>password:admin<br/><br/>untuk login sebagai pegawai<br/>username:pegawai<br/>password:pegawai</p>
 
</body>
</html>