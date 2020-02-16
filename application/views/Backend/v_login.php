<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/owlcarousel2/dist/assets/Backend/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/owlcarousel2/dist/assets/Backend/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/bootstrap-social/bootstrap-social.css">

<!-- Template CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/css/components.css">

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-3">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/Backend/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
            <?php endif; ?>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('Backend/login/aksi_login'); ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus value="<?php echo  $this->session->userdata("username"); ?>">
                    <div class="invalid-feedback">
                      Mohon isi username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Mohon isi password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Djari Production 2020
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php $this->load->view('Backend/templates/js'); ?>
  <?php if ($this->session->flashdata('flash') == 'Gagal') : ?>
    <script>
      swal('Login Gagal', {
        button: false,
        icon: 'error',
        timer: 1500
      });
    </script>
  <?php endif; ?>