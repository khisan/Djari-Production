
  <?php if ($kategori!='all') {
    foreach ($data->result() as $row){
  ?>
  <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
    <div class="portfolio-wrap">
      <figure>
        <img src="<?php echo base_url().'assets/Backend/img/dokumentasi/'.$row->gambar;?>" class="img-fluid" alt="">
        <a href="<?php echo base_url().'assets/Backend/img/dokumentasi/'.$row->gambar;?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
      </figure>
      <div class="portfolio-info">
        <h4><a href="#"><?php echo $row->keterangan; ?></a></h4>
        <p><?php echo $row->nama_kategori; ?></p>
      </div>
    </div>
  </div>
  <?php } }else {?>
  <?php foreach ($dokumentasi->result() as $row){?>
    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
      <div class="portfolio-wrap">
        <figure>
          <img src="<?php echo base_url().'assets/Backend/img/dokumentasi/'.$row->gambar;?>" class="img-fluid" alt="">
          <a href="<?php echo base_url().'assets/Backend/img/dokumentasi/'.$row->gambar;?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview" style="margin: 7%;"><i class="ion ion-eye"></i></a>
        </figure>
        <div class="portfolio-info">
          <h4><a href="#"><?php echo $row->keterangan; ?></a></h4>
          <p><?php echo $row->nama_kategori; ?></p>
        </div>
      </div>
    </div>
  <?php } }?>
