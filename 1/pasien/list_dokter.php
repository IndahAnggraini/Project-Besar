<html>
<head>
	<title>Data Dokter</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<form method="POST" action="">
	<h1>Data Dokter</h1>

		<td><a href="input_dokter.php" class="btn btn-success">Input Data</a></td>
	
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<td>No</td>
				<td align="center">ID Dokter</td>
				<td align="center">Nama Dokter</td>
				<td align="center">Spesialis</td>
				<td align="center" colspan="2">Aksi</td>
			</tr>
		</thead>
		<?php
			$koneksi=mysqli_connect("localhost","root","","db_rumahsakit");
			$view=mysqli_query($koneksi,"Select * from tbl_dokter");
			$no=1;
			while($dataps=mysqli_fetch_array($view)){
		
		?>
		<tbody>
			<tr>
				<td align="center"><?php echo $no ?></td>
				<td align="center"><?php echo $dataps['id_dokter'] ?></td>
				<td align="center"><?php echo $dataps['nama'] ?></td>
				<td align="center"><?php echo $dataps['spesialis'] ?></td>
				<td > <a href="hapus_dokter.php?id=<?php echo $dataps['id_dokter']?>" class="btn btn-danger"> Delete </a></td>

				<td > <a href="edit_dokter.php?id=<?php echo $dataps['id_dokter']?>" class="btn btn-primary"> Edit </a></td>
				
			
			</tr>
		
		
	
		<?php
			$no++;}
		
			?>
		</tbody>
	</table>
</div>
</body>
</html>