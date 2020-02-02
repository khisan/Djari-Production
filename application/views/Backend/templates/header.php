<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title> &mdash; Djari-Production</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/Backend/modules/dropify/css/dropify.min.css')?>">

  <!-- CSS Libraries -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/owlcarousel2/dist/assets/Backend/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/owlcarousel2/dist/assets/Backend/owl.theme.default.min.css">
<?php
if ($this->uri->segment(2) == "auth_login") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/modules/bootstrap-social/bootstrap-social.css">
  <?php
    }
  ?>
<?php
  }
?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Backend/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<?php
if ($this->uri->segment(2) != "auth_login") {
  $this->load->view('Backend/templates/layout');
  $this->load->view('Backend/templates/sidebar');
}
?>
