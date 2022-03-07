<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	
	<form method="POST" action="">
	<h1>   Edit Data Tempat Tidur</h1>
	<?php 
		$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
		$data=mysqli_query($koneksi,"select * from tbl_kamar where id_pasien='$_GET[id]'");
		$dataps=mysqli_fetch_array($data);
	?>
	<table>
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">id_pasien</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="id_pasien" value="<?php echo $dataps['id_pasien'] ?>" placeholder="id_dokter" required="">
				
    		</div>
  		</div>
		<tr>
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pasien</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="nama_pasien" value="<?php echo $dataps['nama_pasien'] ?>" placeholder="nama" required="">
    		</div>
  		</div>
		
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Dokter</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="nama_dokter" value="<?php echo $dataps['nama_dokter'] ?>" placeholder="spesialis" required="">
				
    		</div>
  		</div>
		
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kamar</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="jenis_kamar" value="<?php echo $dataps['jenis_kamar'] ?>" placeholder="spesialis" required="">
				
    		</div>
  		</div>
	
		
	</form><td></td>
				<td>
					<input type="submit" class="btn btn-primary " name="submit" value="Update" >
				</td>
			</tr>	

		</table>
		</div>
	</form>
		
	
	</table>
	
	<?php
		if(isset($_POST['submit'])){
			
			$q=mysqli_query($koneksi,"UPDATE tbl_kamar SET id_pasien='$_POST[id_pasien]',
																nama_pasien='$_POST[nama_pasien]',
																nama_dokter='$_POST[nama_dokter]',
																jenis_kamar='$_POST[jenis_kamar]'
																
			where id_pasien='$_GET[id]'");
			
			if($q){
				
				header('location:list_kamar.php');
			}else{
				echo "data tidak berhasil diupdate";
			}
			
		}
		
	
	?>
</body>
</html>