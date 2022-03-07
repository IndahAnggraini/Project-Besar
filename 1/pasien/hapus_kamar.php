<?php
	$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
	$delete=mysqli_query($koneksi,"DELETE from tbl_kamar where id_pasien='$_GET[id]'");
	header('location:list_kamar.php');

?>