<html>
	<head>
    	<title>Tambah Kategori</title>
    </head>
    <body>
       
    </body>
</html>
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

            
            <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
                
                <div class="row">
                    <div class="col-md-4">
                        <h1>New Categories</h1>
                    </div>
                </div>
                <?php echo validation_errors(); ?>


                <?php echo form_open_multipart('c_cat/create_categories')?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Id" name="id" value="<?php echo set_value('id_cat') ?>" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Judul" name="judul" value="<?php echo set_value('judul_cat') ?>" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Isi" name="Isi" value="<?php echo set_value('isi_cat') ?>" >
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btnSubmit" class="btn btn-primary btn-md" value="Simpan"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

   

    </body>

<?php $this->load->view("footer"); ?>
</html>