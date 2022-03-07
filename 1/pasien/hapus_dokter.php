<?php
	$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
	$delete=mysqli_query($koneksi,"DELETE from tbl_dokter where id_dokter='$_GET[id]'");
	header('location:list_dokter.php');

?>