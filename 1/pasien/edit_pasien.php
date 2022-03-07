<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
	$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
	$q=mysqli_query($koneksi,"SELECT * FROM tbl_pasien WHERE id='$_GET[id]'");
	$data=mysqli_fetch_array($q);
	?>
<div class="container">	
	<h1>Edit Data Pasien</h1>
	<form action=" " method="post" >
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

		</table>
	</div>
	</form>

	<?php
	if(isset($_POST['submit']))
	{
		$q=mysqli_query($koneksi, "UPDATE tbl_pasien SET
		id		= '$_POST[id]',
		nama		= '$_POST[nama]',
		jenis_kelamin		= '$_POST[jenis_kelamin]',
		umur		= '$_POST[umur]',
		alamat		= '$_POST[alamat]'  WHERE id='$_GET[id]'");
		if($q)
		{
			header('location:list_pasien.php');
		}
	}
	?>

</body>
</html>