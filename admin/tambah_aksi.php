<?php 

include '../koneksi.php';
 
$judul = $_POST['judul'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$pengundang = $_POST['pengundang'];
$agenda = $_POST['agenda'];
$keterangan = $_POST['keterangan'];
 
mysqli_query($koneksi,"insert into jadwal_rapat values('','$judul','$tempat','$tanggal','$waktu','$pengundang','$agenda','$keterangan')");
 
header("location:halaman_admin.php");

?>