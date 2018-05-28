
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
        <div class="container">
        <h3>Data Table </h3>
        <?php echo "<h2>".$this->session->flashdata('pesan')."</h2>" ?>
        <table id="example" class="table table-hover">
            <thead>
				<tr>
					<th>Id </th>
	                <th>Judul</th>
	                <th>Penulis</th>
	                <th>Categories</th>
	                <th>Isi</th>
	                  <th>Gambar</th>
				</tr>
				</thead>
				<tbody>
					<?php foreach ($result as $data) { ?>
		            <tr>
		                <td><?php echo $data['id']; ?></td>
		                <td><?php echo $data['judul']; ?></td>
		                <td><?php echo $data['penulis']; ?></td>
		                <td><?php echo $data['categories']; ?></td>
		                 <td><?php echo $data['gambar']; ?></td>
		                <td>	
		                	<a href="<?php echo base_url()."/lihat/".$data['id']; ?>">
		                	<button class="btn btn-primary">
		                	Lihat</button>
		                	</a>
		                </td>
		            </tr>
		            <?php } ?>
				</tbody>
        </table>
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
