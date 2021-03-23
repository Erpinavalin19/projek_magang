<?php 
$koneksi = mysqli_connect("localhost","root","","projek_magang");
 

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>

