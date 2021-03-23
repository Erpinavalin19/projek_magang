<?php 

include '../../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];
 
mysqli_query($koneksi,"update user set nama='$nama', username='$username', password='$password', level='$level', email='$email' where id='$id'");
 
header("location:data_user.php");
 
?>