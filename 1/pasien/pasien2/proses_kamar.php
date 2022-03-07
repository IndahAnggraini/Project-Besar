<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
if ($_GET['proses']=='hapus') {
$hapus=mysqli_query($koneksi,"DELETE FROM tbl_kamar WHERE id_pasien='$_GET[id]'");
header('location:index.php?p=kam');

}
if ($_GET['proses']=='entri') {
	if (isset($_POST['submit'])) {
		$q=mysqli_query($koneksi,"INSERT INTO tbl_kamar (id_pasien,nama_pasien,nama_dokter,jenis_kamar) VALUES('$_POST[id_pasien]','$_POST[nama_pasien]','$_POST[nama_dokter]','$_POST[jenis_kamar]')");
	if ($q) 
		header('location:index.php?p=kam');
	}
}

if ($_GET['proses']=='update') {
if (isset($_POST['submit'])) {
$q=mysqli_query($koneksi,"UPDATE tbl_kamar SET 
		id_pasien='$_POST[id_pasien]',
		nama_pasien='$_POST[nama_pasien]',
		nama_dokter='$_POST[nama_dokter]',
		jenis_kamar='$_POST[jenis_kamar]'																
		where id_pasien='$_GET[id]'");
if ($q) 
	header('location:index.php?p=kam');
}

}
?>