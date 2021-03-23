<?php 

include '../../koneksi.php';
 
$id = $_POST['id'];
$password = $_POST['password'];
 
mysqli_query($koneksi,"update user set password='$password' where id='$id'");
 
header("location:data_user.php");
 
?>