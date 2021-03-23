<?php 

include '../koneksi.php';
 
$id = $_GET['id'];
 
mysqli_query($koneksi,"delete from jadwal_rapat where id='$id'");
 
header("location:halaman_admin.php");
 
?>