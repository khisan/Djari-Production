<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('Backend/templates/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Edit Profil</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <form action="<?php echo base_url() . 'Backend/user_profil/update' ?>" method="post" enctype="multipart/form-data">
            <div class="card">
              <div class="card">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama" value="<?php echo $nama; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Jabatan" name="jabatan" value="<?php echo $jabatan; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Username" name="username" value="<?php echo $user_name; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="inputPassword3" name="gambar"><br>
                      <img src="<?php echo base_url() . '/assets/Backend/img/user/' . $gambar; ?>" class="thumbnail">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer mx-auto">
                <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
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