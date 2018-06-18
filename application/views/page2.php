
<!DOCTYPE html>
<html>
<?php $this->load->view("header"); ?>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html"><img src="<?php echo base_url('images/logo.jpg'); ?>"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="<?php echo base_url()."c_crud/"; ?>">Home</a></li>
					<li><a href="<?php echo base_url()."c_crud/add_data/"; ?>">New Article</a></li>
					<li><a href="<?php echo base_url()."c_crud/add_categories/"; ?>">New Categories</a></li>
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
				<div class="row">
					<?php foreach ($isi as $data)   if (isset($links)) {
            echo $links;
        }
        ?>
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<figure class="text-center">
							<img src="<?php echo base_url('images/'.$data['gambar']); ?>" alt="Free HTML5 Bootstrap" class="img-responsive">
						</figure>
					</div>
					
					<div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">
						
						<div class="col-md-9 col-md-push-3">
							<h1><?php echo $data['judul']; ?></h1>
							<p><?php echo $data['isi']; ?></p>
						</div>

						<div class="col-md-3 col-md-pull-9 fh5co-services">
							<h3><?php echo $data['penulis']; ?></h3>
						</div>
						
					</div>
					
				</div>

				<div class="row work-pagination animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">

						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<button class="btn btn-primary btn-md"><a href="<?php echo base_url()."c_crud/edit_data/".$data['id']; ?>">Edit</a></button>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<a href="<?php echo base_url()."c_crud" ?>"><i class="icon-th-large"></i></a>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<button class="btn btn-primary btn-md"><a href="<?php echo base_url()."c_crud/do_delete/".$data['id']; ?>">Delete</a></button>
						</div>
						<div>
							
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>


	</body>
	<?php $this->load->view("footer"); ?>
</html>