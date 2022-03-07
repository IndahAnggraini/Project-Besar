 <?php
 $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
 switch ($aksi) {
 case 'list' :
 ?>
<h1>Data Tempat Tidur<h1>
<a href="?p=kam&aksi=entri" class="btn btn-success">Tambah Data</a> <br>
<table class="table table-striped table-bordered">
<tr>
	<th>No</th>
	<th>ID Pasien</th>
	<th>Nama Pasien</th>
	<th>Nama Dokter</th>
	<th>Jenis Kamar</th>
	<th>Aksi</th>
	
</tr>
<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
$ambil=mysqli_query($koneksi,"SELECT * FROM tbl_kamar");
$no=1;
while ($data=mysqli_fetch_array($ambil)) {
?>
<tr>
	<td><?php echo $no;?></td>
	<td><?php echo $data['id_pasien']?></td>
	<td><?php echo $data['nama_pasien']?></td>
	<td><?php echo $data['nama_dokter']?></td>
	<td><?php echo $data['jenis_kamar']?></td>
	<td align="center">
	<a href="proses_kamar.php?proses=hapus&id=<?php echo $data['id_pasien']?>" class="btn btn-danger">Hapus</a>
	|
	<a href="?p=kam&aksi=edit&id=<?php echo $data['id_pasien']?>" class="btn btn-primary">Edit</a>
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
 <h1>Entri data Tempat Tidur</h1>
<form action="proses_kamar.php?proses=entri" method="post">
<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">ID Pasien</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="id_pasien" placeholder="id_pasien" required="">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pasien</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="nama_pasien" placeholder="nama_pasien" required="">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Dokter</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="nama_dokter" placeholder="nama_dokter" required="">
		</div>
	</div>
	
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kamar</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="jenis_kamar" placeholder="jenis_kamar" required="">
		</div>
	</div>

	<fieldset class="form-group">
	<div class="row">
      
		<div class="col-sm-10">
			<div class="form-group" class="form-control">
				<input type="submit" class="btn btn-dark"name="submit" value="submit">
				<a href="list_kamar.php">View Data</a>
			</div>
		</div>
	</div>
	</fieldset>

</form>
 
 <?php
 break;
 case 'edit' :
 ?>
 <h1>Edit data Tempat Tidur</h1>
<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
$q=mysqli_query($koneksi,"SELECT * FROM tbl_kamar WHERE id_pasien ='$_GET[id]'");
$data=mysqli_fetch_array($q);
?>
<form action="proses_kamar.php?proses=update&id=<?= $data['id_pasien'] ?>" method="post">
<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">id_pasien</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="id_pasien" value="<?php echo $data['id_pasien'] ?>" placeholder="id_dokter" required="">
				
    		</div>
  		</div>
		<tr>
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pasien</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="nama_pasien" value="<?php echo $data['nama_pasien'] ?>" placeholder="nama_pasien" required="">
    		</div>
  		</div>
		
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Dokter</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="nama_dokter" value="<?php echo $data['nama_dokter'] ?>" placeholder="nama_dokter" required="">
				
    		</div>
  		</div>
		
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kamar</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="jenis_kamar" value="<?php echo $data['jenis_kamar'] ?>" placeholder="jenis_kamar" required="">
				
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
 