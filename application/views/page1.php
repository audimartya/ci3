
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
					<li><a href="<?php echo base_url()."c_cat/"; ?>">Categories</a></li>
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
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">W E L C O M E <span> See my article</span></h2>
				<?php foreach($result as $id)  if (isset($links)) {
            echo $links;
        }
        ?>
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
			
			
			
		

	

	</body>
	<?php $this->load->view("footer"); ?>
</html>

