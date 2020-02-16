<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('Backend/templates/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Edit Profil</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Data Admin</a></div>
        <div class="breadcrumb-item">Form</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <form action="<?php echo base_url() . 'Backend/ubah_pass/ubah' ?>" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password Lama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Password Lama" name="password_lama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password Baru" name="password_baru">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Konfirmasi Password" name="konfir_password">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer mx-auto">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
            </div>
        </div>
      </div>
    </div>
    </form>
  </section>
</div>
<?php $this->load->view('Backend/templates/footer'); ?>
<!--Toast Message-->
<?php if ($this->session->flashdata('msg') == 'success') : ?>
  <script>
    swal('Password berhasil dirubah', {
      button: false,
      icon: 'success',
      timer: 1500
    });
  </script>
<?php elseif ($this->session->flashdata('msg') == 'error-notmatch') : ?>
  <script>
    swal('Password dan Konfirmasi Password Tidak Cocok', {
      button: false,
      icon: 'error',
      timer: 1500
    });
  </script>
<?php elseif ($this->session->flashdata('msg') == 'error-notfound') : ?>
  <script>
    swal('Password Tidak Ditemukan', {
      button: false,
      icon: 'error',
      timer: 1500
    });
  </script>
<?php elseif ($this->session->flashdata('msg') == 'error') : ?>
  <script>
    swal('ID User Tidak Ditemukan', {
      button: false,
      icon: 'error',
      timer: 1500
    });
  </script>
<?php else : ?>

<?php endif; ?>