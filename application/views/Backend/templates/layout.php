<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <?php
              $id_user = $this->session->userdata('id_user');
              $query = $this->db->get_where('tb_user', array('id_user' => $id_user));
              if ($query->num_rows() > 0) :
                $row = $query->row_array();
              ?>
                <img alt="image" src="<?php echo base_url() . 'assets/Backend/img/user/' . $row['gambar']; ?>" class="rounded-circle mr-1">
              <?php else : ?>
                <img alt="image" src="<?php echo base_url() . 'assets/Backend/img/user/avatar-1.png'; ?>" class="rounded-circle mr-1">
              <?php endif; ?>
              <div class="d-sm-none d-lg-inline-block">Hai, <?php echo  $this->session->userdata("nama"); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Pengaturan</div>
              <a href="<?php echo base_url(); ?>Backend/User_profil" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Edit Profil
              </a>
              <a href="<?php echo base_url(); ?>dist/features_settings" class="dropdown-item has-icon">
                <i class="fas fa-lock"></i> Ubah Password
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
        </ul>
      </nav>