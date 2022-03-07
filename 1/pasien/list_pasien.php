<html>
<head>
	<title>Data Pasien</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<form method="POST" action="">
	<h1>Data Pasien</h1>

		<td><a href="input_pasien.php" class="btn btn-success">Input Data</a></td>
	
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<td>No</td>
				<td align="center">ID</td>
				<td align="center">Nama Pasien</td>
				<td align="center">Jenis Kelamin</td>
				<td align="center">Umur</td>
				<td align="center">Alamat</td>
				<td align="center" colspan="2">Aksi</td>
			</tr>
		</thead>
		<?php
			$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
			$view=mysqli_query($koneksi,"SELECT * FROM tbl_pasien");
			$no=1;
			while($dataps=mysqli_fetch_array($view)){
		
		?>
		<tbody>
			<tr>
				<td align="center"><?php echo $no ?></td>
				<td align="center"><?php echo $dataps['id'] ?></td>
				<td align="center"><?php echo $dataps['nama'] ?></td>
				<td align="center"><?php echo $dataps['jenis_kelamin'] ?></td>
				<td align="center"><?php echo $dataps['umur'] ?></td>
				<td align="center"><?php echo $dataps['alamat'] ?></td>
				<td > <a href="hapus_pasien.php?id=<?php echo $dataps['id']?>" class="btn btn-danger"> Delete </a></td>

				<td > <a href="edit_pasien.php?id=<?php echo $dataps['id']?>" class="btn btn-primary"> Edit </a></td>
				
			
			</tr>
		
		
	
		<?php
			$no++;}
		
			?>
		</tbody>
	</table>
</div>
</body>
</html>