<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>dist/index">Homepage</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo base_url(); ?>dist/index">HP</a>
    </div>
    <ul class="sidebar-menu">
      <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>Backend/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li><a class="nav-link" href="<?php echo base_url(); ?>Backend/Data_admin"><i class="fas fa-users"></i> <span>Data Admin</span></a>
      </li>
      <li class="<?php echo $this->uri->segment(2) == 'blank' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Backend/dokumentasi"><i class="fas fa-camera"></i> <span>Dokumentasi</span></a>
      </li>
      <li class="<?php echo $this->uri->segment(2) == 'blank' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Backend/kategori"><i class="fas fa-columns"></i> <span>Kategori</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'blank' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Backend/jadwal"><i class="far fa-square"></i> <span>Jadwal</span></a></li>
      <li class="dropdown <?php echo $this->uri->segment(2) == 'forms_advanced_form' || $this->uri->segment(2) == 'forms_editor' || $this->uri->segment(2) == 'forms_validation' ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>Backend/jadwal_selesai" class="nav-link"><i class="far fa-file-alt"></i> <span>Jadwal Selesai</span></a>
      </li>
      <li class="dropdown">
        <a href="<?php echo base_url(); ?>Backend/User_profil" class="nav-link"><i class="far fa-user"></i> <span>Profil</span></a>
      </li>
    </ul>
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="<?php echo base_url('Backend/login/logout'); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-lock"></i> Logout
      </a>
    </div>
  </aside>
</div>