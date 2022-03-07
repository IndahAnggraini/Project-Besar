<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
if ($_GET['proses']=='hapus') {
$hapus=mysqli_query($koneksi,"DELETE FROM tbl_pasien WHERE id='$_GET[id]'");
header('location:index.php?p=pas');

}
if ($_GET['proses']=='entri') {
	if (isset($_POST['submit'])) {
		$q=mysqli_query($koneksi,"INSERT INTO tbl_pasien (id,nama,jenis_kelamin,umur,alamat) VALUES('$_POST[id]','$_POST[nama]','$_POST[jenis_kelamin]','$_POST[umur]','$_POST[alamat]')");
	if ($q) 
		header('location:index.php?p=pas');
	}
}

if ($_GET['proses']=='update') {
if (isset($_POST['submit'])) {
$q=mysqli_query($koneksi,"UPDATE tbl_pasien SET 
		id		='$_POST[id]',
		nama	='$_POST[nama]',
		jenis_kelamin	='$_POST[jenis_kelamin]',
		umur	='$_POST[umur]',
		alamat	='$_POST[alamat]' WHERE id='$_GET[id]'");
if ($q) 
	header('location:index.php?p=pas');
}

}
?>