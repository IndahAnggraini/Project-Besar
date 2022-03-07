 <?php
 $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
 switch ($aksi) {
 case 'list' :
 ?>
<h1>Data Pasien</h1>
<a href="?p=pas&aksi=entri" class="btn btn-success">Tambah Data</a> <br>
<table class="table table-striped table-bordered">
<tr>
	<th>No</th>
	<th>ID</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Umur</th>
	<th>Alamat</th>
	<th>Aksi</th>
</tr>
<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
$ambil=mysqli_query($koneksi,"SELECT * FROM tbl_pasien");
$no=1;
while ($data=mysqli_fetch_array($ambil)) {
?>
<tr>
	<td><?php echo $no;?></td>
	<td><?php echo $data['id']?></td>
	<td><?php echo $data['nama']?></td>
	<td><?php echo $data['jenis_kelamin']?></td>
	<td><?php echo $data['umur']?></td>
	<td><?php echo $data['alamat']?></td>
	<td align="center">
	<a href="proses_pasien.php?proses=hapus&id=<?php echo $data['id']?>" class="btn btn-danger">Hapus</a>
	|
	<a href="?p=pas&aksi=edit&id=<?php echo $data['id']?>" class="btn btn-primary">Edit</a>
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
 <h1>Entri data Pasien</h1>
<form action="proses_pasien.php?proses=entri" method="post">
<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pasien</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" name="nama" placeholder="nama" required>
		</div>
	</div>
	
		<div class="form-group row">
		<label  class="col-sm-2 col-form-label">Jenis Kelamin</label>
		<div class="col-sm-10">
		<select class="form-control form-control-sm" name="jenis_kelamin">
		        <option value="">--Pilih Jenis kelamin--</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
        </select>
		</div>
		</div>

	
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">umur</label>
		<div class="col-sm-6">
			<input type="number" class="form-control" name="umur" placeholder="umur" required>
		</div>
	</div>
	
	<fieldset class="form-group">
	<div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Alamat</legend>
		<div class="col-sm-10">
			<div class="form-group" class="form-control">
				<textarea name="alamat">
			
				</textarea>
			</div>
		</div>
	</div>
	</fieldset>
	

	<fieldset class="form-group">
	<div class="row">
      
		<div class="col-sm-10">
			<div class="form-group" class="form-control">
				<input type="submit" class="btn btn-dark"name="submit" value="submit">
				<a href="list_pasien.php">View Data</a>
			</div>
		</div>
	</div>
	</fieldset>

</form>
 
 <?php
 break;
 case 'edit' :
 ?>
 <h1>Edit data Pasien</h1>
<?php
$koneksi=mysqli_connect("localhost","root","","db_rumahsakit"); 
$q=mysqli_query($koneksi,"SELECT * FROM tbl_pasien WHERE id ='$_GET[id]'");
$data=mysqli_fetch_array($q);
?>
<form action="proses_pasien.php?proses=update&id=<?= $data['id'] ?>" method="post">
<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    		<div class="col-sm-8">
					<input type="text" value="<?= $data['id']?>" name="id">
			</div>
  		</div>

<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    		<div class="col-sm-8">
					<input type="text" value="<?= $data['nama']?>" name="nama">
			</div>
  		</div>
		
		<div class="form-group row">
  		<div class="col-sm-2">Jenis Kelamin</div>
  			<div class="col-sm-6">
  				<div class="form-group">
  					<select name="jenis_kelamin" class="form-control">
						<option <?php if ($data['jenis_kelamin']=="None") echo 'selected'; ?> value="None" ></option>
						<option <?php if ($data['jenis_kelamin']=="Laki-Laki") echo 'selected'; ?> value="Laki-Laki" >Laki-Laki</option>
						<option <?php if ($data['jenis_kelamin']=="Perempuan") echo 'selected'; ?> value="Perempuan" >Perempuan</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="form-group row">
  		<div class="col-sm-2">Umur</div>
  			<div class="col-sm-6">
					<input type="text" value="<?= $data['umur']?>" name="umur">
			</div>
		</div>
		
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
    		<div class="col-sm-8">
					<textarea cols="40" rows="2" name="alamat"><?php echo $data['alamat']?></textarea>
			</div>
  		</div>
		
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Update" >
				</td>
			</tr>
</form>
 <?php
 break;
 }
 ?>
 