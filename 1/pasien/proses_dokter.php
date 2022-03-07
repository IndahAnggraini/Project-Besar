<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
if ($_GET['proses']=='hapus') {
$hapus=mysqli_query($koneksi,"DELETE FROM tbl_dokter WHERE id_dokter='$_GET[id]'");
header('location:index.php?p=dok');

}
if ($_GET['proses']=='entri') {
	if (isset($_POST['submit'])) {
		$q=mysqli_query($koneksi,"INSERT INTO tbl_dokter (id_dokter,nama,spesialis) VALUES('$_POST[id_dokter]','$_POST[nama]','$_POST[spesialis]')");
	if ($q) 
		header('location:index.php?p=dok');
	}
}

if ($_GET['proses']=='update') {
if (isset($_POST['submit'])) {
$q=mysqli_query($koneksi,"UPDATE tbl_dokter SET 
		id_dokter='$_POST[id_dokter]',
		nama='$_POST[nama]',
		spesialis='$_POST[spesialis]'
		where id_dokter='$_GET[id]'");
if ($q) 
	header('location:index.php?p=dok');
}

}
?>