<?php 

include '../koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$pengundang = $_POST['pengundang'];
$agenda = $_POST['agenda'];
$keterangan = $_POST['keterangan'];
 
mysqli_query($koneksi,"update jadwal_rapat set judul='$judul', tempat='$tempat', tanggal='$tanggal', waktu='$waktu', pengundang='$pengundang', agenda='$agenda', keterangan='$keterangan' where id='$id'");
 
header("location:halaman_admin.php");
 
?>