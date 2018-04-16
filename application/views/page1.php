
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> audimartya
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Keep Healthy!" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/animate.css'); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/icomoon.css'); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.css'); ?>">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/owl.carousel.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/owl.theme.default.min.css'); ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css'); ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('./assets/js/modernizr-2.6.2.min.js'); ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('./assets/js/respond.min.js'); ?>"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html"><img src="<?php echo base_url('images/logo.jpg'); ?>"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="<?php echo base_url()."c_crud/"; ?>">Home</a></li>
					<li><a href="<?php echo base_url()."c_crud/add_data/"; ?>">New Article</a></li>
					
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>By: audimartya</span> </p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">W E L C O M E <span> See my article</span></h2>
				<?php foreach($result as $d){ ?>
				<div class="row animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="<?php echo base_url()."c_crud/do_preview/".$d['id']; ?>">
							<img src="<?php echo base_url('images/'.$d['gambar']); ?>"  class="img-responsive">
							<h3 class="fh5co-work-title"><?php echo $d['judul']; ?></h3>
							<p><?php echo $d['penulis']; ?></p>
						</a>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>
				<?php } ?> 
			</div>
			
			
			
		

	 <!-- jQuery -->
	<script src="<?php echo base_url('./assets/js/jquery.min.js'); ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('./assets/js/jquery.easing.1.3.js'); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('./assets/js/bootstrap.min.js'); ?>"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url('./assets/js/owl.carousel.min.js'); ?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url('./assets/js/jquery.stellar.min.js'); ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('./assets/js/jquery.waypoints.min.js'); ?>"></script>
	<!-- Counters -->
	<script src="<?php echo base_url('./assets/js/jquery.countTo.js'); ?>"></script>
	 -->
	
	<!-- MAIN JS -->
	<script src="<?php echo base_url('./assets/js/main.js'); ?>"></script>

	</body>
</html>

