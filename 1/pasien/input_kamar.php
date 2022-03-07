<html>
<head>
	<title></title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<form method="POST" action="">
	<h1>Inputan Data Tempat Tidur</h1>
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
	
	</table>
	
	<?php
		if(isset($_POST['submit'])){
			$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
			$q=mysqli_query($koneksi,"INSERT INTO tbl_kamar(id_pasien,nama_pasien,nama_dokter,jenis_kamar) VALUES 
			('$_POST[id_pasien]','$_POST[nama_pasien]','$_POST[nama_dokter]','$_POST[jenis_kamar]')");
			
			if($q){
				
				header('location:list_kamar.php');
			}else{
				echo "data tidak berhasil dimasukkan";
			}
			
		}
		
	
	?>
</div>
</body>
</html>