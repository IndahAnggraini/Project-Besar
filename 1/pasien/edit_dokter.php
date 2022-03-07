<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	
	<form method="POST" action="">
	<h1>   Edit Data Dokter</h1>
	<?php 
		$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
		$data=mysqli_query($koneksi,"select * from tbl_dokter where id_dokter='$_GET[id]'");
		$dataps=mysqli_fetch_array($data);
	
	
	?>
	<table>
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">id_dokter</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="id_dokter" value="<?php echo $dataps['id_dokter'] ?>" placeholder="id_dokter" required="">
				
    		</div>
  		</div>
		<tr>
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Dokter</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="nama" value="<?php echo $dataps['nama'] ?>" placeholder="nama" required="">
    		</div>
  		</div>
		
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Spesialis</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="spesialis" value="<?php echo $dataps['spesialis'] ?>" placeholder="spesialis" required="">
				
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
			
			$q=mysqli_query($koneksi,"UPDATE tbl_dokter SET id_dokter='$_POST[id_dokter]',
																nama='$_POST[nama]',
																spesialis='$_POST[spesialis]'
																
			where id_dokter='$_GET[id]'");
			
			if($q){
				
				header('location:list_dokter.php');
			}else{
				echo "data tidak berhasil diupdate";
			}
			
		}
		
	
	?>
</body>
</html>