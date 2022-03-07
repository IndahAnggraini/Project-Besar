<html>
<head>
	<title>Input Pasien</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<form method="POST" action="">
	<h1>Inputan Data Pasien</h1>
	
	
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
	
	</table>
	
	<?php
		if(isset($_POST['submit'])){
			$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
			$q=mysqli_query($koneksi,"INSERT INTO tbl_pasien(id,nama,jenis_kelamin,umur,alamat)
			VALUES ('$_POST[id]','$_POST[nama]','$_POST[jenis_kelamin]','$_POST[umur]','$_POST[alamat]')");
			
			if($q){
				
				header('location:list_pasien.php');
			}else{
				echo "data tidak berhasil dimasukkan";
			}
			
		}
		
	
	?>
</div>
</body>
</html>