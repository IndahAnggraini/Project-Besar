<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
$hapus=mysqli_query($koneksi,"DELETE FROM tbl_pasien WHERE id='$_GET[id]'");
header('location:list_pasien.php');
?>