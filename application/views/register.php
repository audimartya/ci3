<!DOCTYPE html>
<html>
<?php $this->load->view("header"); ?>
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


  </body>
  <?php $this->load->view("footer"); ?>
</html>