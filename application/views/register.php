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
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

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
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Register</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="bs-component">
              <?php echo validation_errors(); ?>
               <?php echo form_open('User/register', array('class' => 'needs-validation','novalidate' => ''));?>
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                    <div class="invalid-feedback">
                      Isi Nama Lengkap
                    </div>
                  </div>
                </div>
               
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <div class="invalid-feedback">
                      Isi Email
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <div class="invalid-feedback">
                      Isi Username 
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="invalid-feedback">
                      Isi Password 
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" required>
                    <div class="invalid-feedback">
                      Konfirmasi Password 
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Tanggal Daftar</label>
                    <input type="date" class="form-control" name="tanggal" required>
                    <div class="invalid-feedback">
                      Isi tanggal 
                    </div>
                  </div>
                </div>
                
                <button class="btn btn-primary" type="submit">Register</button>
                <button class="btn btn-warning"><a href="<?php echo base_url()."c_crud/"; ?>">Back</a></button>
              </form>
            </div>
          </div>
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
   -->
  
  <!-- MAIN JS -->
  <script src="<?php echo base_url('./assets/js/main.js'); ?>"></script>

  </body>
</html>