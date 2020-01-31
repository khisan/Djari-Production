<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Backend/templates/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jadwal</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $data; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jadwal Selesai</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $data2; ?>
                  </div>
                </div>
              </div>
            </div>                
          </div>           
        </section>
      </div>
<?php $this->load->view('Backend/templates/footer'); ?>