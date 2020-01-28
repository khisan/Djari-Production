<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
      <li class="dropdown <?php echo $this->uri->segment(2) == 'layout_default' || $this->uri->segment(2) == 'layout_transparent' || $this->uri->segment(2) == 'layout_top_navigation' ? 'active' : ''; ?>">
        <a href="#" class="nav-link" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Paket</span></a>
      </li>
      <li class="<?php echo $this->uri->segment(2) == 'blank' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Backend/jadwal"><i class="far fa-square"></i> <span>Jadwal</span></a></li>
      <li class="dropdown <?php echo $this->uri->segment(2) == 'forms_advanced_form' || $this->uri->segment(2) == 'forms_editor' || $this->uri->segment(2) == 'forms_validation' ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>Backend/jadwal_selesai" class="nav-link"><i class="far fa-file-alt"></i> <span>Jadwal Selesai</span></a>
      </li>
    </ul>
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="<?php echo base_url('Backend/login/logout'); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-lock"></i> Logout
      </a>
    </div>
  </aside>
</div>