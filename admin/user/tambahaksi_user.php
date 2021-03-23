<?php 

include '../../koneksi.php';
 
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];
 
mysqli_query($koneksi,"insert into user values('','$nama','$username','$password','$level','$email')");
 
header("location:data_user.php");

?>