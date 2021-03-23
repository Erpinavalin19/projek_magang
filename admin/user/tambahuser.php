<!DOCTYPE html>
<html>
<head>
	<title>Tambah Jadwal</title>
<link rel="stylesheet" href="../../css/tambah_user.css">
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
 
	<h2>Tambah User</h2>
	<br/>
	<br/>

<div class="container2">
	<form method="post" action="tambahaksi_user.php" onSubmit="return validasi()">
		<table>
			<tr>			
				<td>nama</td>
				<td><input type="text" name="nama" required /></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td>user level</td>
				<td ><input  type="text" name="level" ></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="email" name="email" required></td>
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