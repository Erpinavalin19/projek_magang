<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="halaman_admin.php">back</a>

<?php
include "../koneksi.php";

?>



<form action="" method="post">
    
        <?php
        $no = 1;

        $select = mysqli_query($koneksi,"SELECT * FROM jadwal_rapat");
        while($data = mysqli_fetch_array($select)){
        ?>

        Judul       :<?php echo $data["judul"];?>
        <br />
        Tempat      :<?php echo $data["tempat"];?>
        <br />
        Tanggal     :<?php echo $data["tanggal"];?>
        <br />
        Waktu       :<?php echo $data["waktu"];?>   
        <br />
        pengundang  :<?php echo $data["pengundang"];?> 
        <br />
        Agenda      :<?php echo $data["agenda"];?>
        <br />
        <br />
        Keterangan    :<?php echo $data["keterangan"];?>
            <br />
            <br />
        <?php } ?>
</form>

</body>
</html>