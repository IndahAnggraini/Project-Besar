 <?php
 $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
 switch ($aksi) {
 case 'list' :
 ?>
<h1>Data Dokter</h1>
<a href="?p=dok&aksi=entri" class="btn btn-success">Tambah Data</a> <br>
<table class="table table-striped table-bordered">
<tr>
	<th>No</th>
	<th>ID Dokter</th>
	<th>Nama Dokter</th>
	<th>Spesialis</th>
	<th>Aksi</th>
	
</tr>
<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
$ambil=mysqli_query($koneksi,"SELECT * FROM tbl_dokter");
$no=1;
while ($data=mysqli_fetch_array($ambil)) {
?>
<tr>
	<td><?php echo $no;?></td>
	<td><?php echo $data['id_dokter']?></td>
	<td><?php echo $data['nama']?></td>
	<td><?php echo $data['spesialis']?></td>
	<td align="center">
	<a href="proses_dokter.php?proses=hapus&id=<?php echo $data['id_dokter']?>" class="btn btn-danger">Hapus</a>
	|
	<a href="?p=dok&aksi=edit&id=<?php echo $data['id_dokter']?>" class="btn btn-primary">Edit</a>
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
 <h1>Entri data Dokter</h1>
<form action="proses_dokter.php?proses=entri" method="post">
<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">ID Dokter</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="id_dokter" placeholder="id_dokter" required="">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Dokter</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="nama" placeholder="nama" required="">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Spesialis</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="spesialis" placeholder="spesialis" required="">
		</div>
	</div>
	

	<fieldset class="form-group">
	<div class="row">
      
		<div class="col-sm-10">
			<div class="form-group" class="form-control">
				<input type="submit" class="btn btn-dark"name="submit" value="submit">
				<a href="list_dokter.php">View Data</a>
			</div>
		</div>
	</div>
	</fieldset>

</form>
 
 <?php
 break;
 case 'edit' :
 ?>
 <h1>Edit data Dokter</h1>
<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
$q=mysqli_query($koneksi,"SELECT * FROM tbl_dokter WHERE id_dokter ='$_GET[id]'");
$data=mysqli_fetch_array($q);
?>
<form action="proses_dokter.php?proses=update&id=<?= $data['id_dokter'] ?>" method="post">
<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">id_dokter</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="id_dokter" value="<?php echo $data['id_dokter'] ?>" placeholder="id_dokter" required="">
				
    		</div>
  		</div>
		<tr>
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Dokter</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" placeholder="nama" required="">
    		</div>
  		</div>
		
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Spesialis</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="spesialis" value="<?php echo $data['spesialis'] ?>" placeholder="spesialis" required="">
				
    		</div>
  		</div>	
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="update" >
				</td>
			</tr>
		
</form>
 <?php
 break;
 }
 ?>
 