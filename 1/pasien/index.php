<html>
<head>
<title></title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Data Rumah Sakit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>	
      <li class="nav-item">
        <a class="nav-link" href="index.php?p=pas">Pasien</a>
      </li> 
     <li class="nav-item">
        <a class="nav-link" href="index.php?p=dok">Dokter</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="index.php?p=kam">Tempat Tidur</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container" style="padding-top:50px">
	<div class="row">
		<div class="col-md-2">
			<nav class="nav flex-column">
					<a href="index.php" class="nav-link">Home</a>
					<a href="index.php?p=pas" class="nav-link">Pasien</a>
					<a href="index.php?p=dok" class="nav-link">Dokter</a>
					<a href="index.php?p=kam" class="nav-link">Tempat Tidur</a>
					
			</nav>
		</div>
		<div class="col-md">
				<?php
				$p=isset($_GET['p']) ? $_GET['p'] : 'home';
				if ($p=='home') include 'home.php';
				elseif ($p=='pas') include 'tbl_pasien.php';
				elseif ($p=='dok') include 'tbl_dokter.php';
				elseif ($p=='kam') include 'tbl_kamar.php';
				?>
		</div>
	</div>
</div>
</body>
</html>