 <?php
 $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
 switch ($aksi) {
 case 'list' :
 ?>
<h1>Data User</h1>
<a href="?p=user&aksi=entri" class="btn btn-success">Tambah Data</a> <br>
<table class="table table-striped table-bordered">
<tr>
	<th>No</th>
	<th>Username</th>
	<th>Password</th>
	<th>Aksi</th>
</tr>
<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
$ambil=mysqli_query($koneksi,"SELECT * FROM tbl_user");
$no=1;
while ($data=mysqli_fetch_array($ambil)) {
?>
<tr>
	<td><?php echo $no;?></td>
	<td><?php echo $data['username']?></td>
	<td><?php echo $data['password']?></td>
	<td align="center">
	<a href="proses_user.php?proses=hapus&id=<?php echo $data['id_user']?>" class="btn btn-danger">Hapus</a>
	|
	<a href="?p=user&aksi=edit&id=<?php echo $data['id_user']?>" class="btn btn-primary">Edit</a>
	</td>
</tr>
<?php
$no++;
}
?>
</table>
  
 <?php
 break;
 case 'entri' :
 ?>
 <h1>Entri data User</h1>
<form action="proses_user.php?proses=entri" method="post">
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="username" placeholder="username" required>
    </div> 
  </div>
 <div class="form-group row">
    <label class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-8">
     <input type="text" class="form-control" name="password" placeholder="password" required>
    </div> 
  </div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <input type="submit" class="btn btn-primary" name="Submit" value="Simpan">
    </div> 
  </div>

</form>
 
 <?php
 break;
 case 'edit' :
 ?>
 <h1>Edit data Rumah Sakit</h1>
<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
$q=mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE id_user='$_GET[id]'");
$data=mysqli_fetch_array($q);
?>
<form action="proses_user.php?proses=update&id=<?= $data['id_user'] ?>" method="post">
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" >
    </div> 
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="password" placeholder="password" required>
    </div> 
<div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <input type="submit" class="btn btn-primary" name="Submit" value="update">
    </div> 
  </div>
</form>
 <?php
 break;
 }
 ?>
 