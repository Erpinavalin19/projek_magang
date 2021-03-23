<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>

<link rel="stylesheet" href="../../css/edit_user.css">
</head>
<body>
 
<div class="container1"></div>
<header>
<div class="container">
<h1><a href="#">Meeting Schedule</a></h1>
<ul>
<li class="#"><a href="data_user.php">Data User</a></li>
</ul>

</div>

	<h2>Edit Data</h2>
	<br/>
	<br/>
	
	<?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<div class="container2">
		<form method="post" action="updateuser.php">
			<table>
				<tr>			
					<td>nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" required name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" required name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td>user level</td>
					<td><input type="text" required name="level" value="<?php echo $d['level']; ?>"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="email" required  name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>

				<td class="button"><input class="tombol" type="submit" value="SIMPAN" onClick="return confirm('simpan data user?')"> 
				<input class="tombol" type="reset" value="SEBELUMNYA">
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