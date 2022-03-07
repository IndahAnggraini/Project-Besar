<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
if ($_GET['proses']=='hapus') {
$hapus=mysqli_query($koneksi,"DELETE FROM tbl_user WHERE id_user='$_GET[id]'");
header('location:index.php?p=user');

}
if ($_GET['proses']=='entri') {
  if (isset($_POST['Submit'])) {
  	$pass=md5($_POST['password']);

    $q=mysqli_query($koneksi,"INSERT INTO tbl_user (username,password) VALUES('$_POST[username]','$pass')");
  if ($q) 
    header('location:index.php?p=user');
  }
}

if ($_GET['proses']=='update') {
if (isset($_POST['Submit'])) {
$q=mysqli_query($koneksi,"UPDATE tbl_user SET 
    username      ='$_POST[username]',
    password       ='$_POST[password]'
    WHERE id_user='$_GET[id]'");
if ($q) 
  header('location:index.php?p=user');
}

}
?>