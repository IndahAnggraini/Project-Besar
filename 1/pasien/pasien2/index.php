

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Data Rumah Sakit</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">  

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header> 

   	<div class="header-logo">
	      <a href="index.php">Data Rumah Sakit</a>
	   </div> 

		<a id="header-menu-trigger" href="#0">
		 	<span class="header-menu-text">Menu</span>
		  	<span class="header-menu-icon"></span>
		</a> 

		<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	   	<h3>Data Rumah Sakit</h3>  

			<ul class="nav-list">
				<li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-adjust"></i>
              <p>
                Home
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="index.php?p=pas" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Pasien
              </p>
            </a>
          </li>
       <li class="nav-item">
            <a href="index.php?p=dok" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Dokter
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="index.php?p=kam" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Kamar
              </p>
            </a>
          </li> 
          
		  <li class="nav-item">
            <a href="index.php?p=user" class="nav-link">
              <i class="nav-icon fas fa-baby"></i>
              <p>
                User
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-baby"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
			</ul>				

			<ul class="header-social-list">
	         <li>
	         	<a href="#"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-twitter"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-instagram"></i></a>
	         </li>
            <li>
            	<a href="#"><i class="fa fa-behance"></i></a>
            </li>
	         <li>
	         	<a href="#"><i class="fa fa-dribbble"></i></a>
	         </li>	         
	      </ul>		

		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  		
				  			<h1 class="animate-intro">
							Data Rumah Sakit  <br>
				  			</h1>						

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		<ul class="home-social-list">
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-facebook-square"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-twitter"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-instagram"></i></a>
	      </li>
         <li class="animate-intro">
           	<a href="#"><i class="fa fa-behance"></i></a>
         </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-dribbble"></i></a>
	      </li>	      
	   </ul> <!-- end home-social-list -->			
   
   <div class="scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">		
		   	Scroll Down		   	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>	
   
   </section> <!-- end home -->
   
   
   <section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
						<div class="card-body pad">
              <div class="mb-3">
                <?php
				$p=isset($_GET['p']) ? $_GET['p'] : 'home';
				if ($p=='home') include 'home.php';
				elseif ($p=='pas') include 'tbl_pasien.php';
				elseif ($p=='dok') include 'tbl_dokter.php';
				elseif ($p=='kam') include 'tbl_kamar.php';
				elseif ($p=='user') include 'tbl_user.php';
				?>
              </div>
              
            </div>
				</div>   

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
   <!-- Bootstrap 4 -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>

</html>