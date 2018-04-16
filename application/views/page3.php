
<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nitro &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

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
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html"><img src="assets/images/logo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="about.html">About</a></li>
					<li class="fh5co-active"><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2016 Nitro Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="fh5co-main">

			
			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				
				<div class="row">
					<div class="col-md-4">
						<h1>Get In Touch</h1>
					</div>
				</div>
				<form action="">
				<?php echo form_open_multipart('c_crud/do_insert')?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Penulis" name="penulis">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Judul" name="judul">
									</div>
									<div class="form-group">
										<textarea name="isi" id="message" cols="30" rows="7" class="form-control" placeholder="Isi"></textarea>
									</div>
									<div class="form-group">
										<input type="file" class="form-control" placeholder="Upload" name="userfile">
									</div>
									<div class="form-group">
										<input type="submit" name="btnSubmit" class="btn btn-primary btn-md" value="Send Message">
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</form>
			</div>

		</div>
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
	
	
	<!-- MAIN JS -->
	<script src="<?php echo base_url('./assets/js/main.js'); ?>"></script>

	</body>
</html>

