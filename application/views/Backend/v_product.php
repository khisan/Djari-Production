<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('Backend/templates/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Produk</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <a href="#" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#addRowModal"><i class="fas fa-plus"></i>Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    foreach ($data->result() as $row) :
                      $no++;
                    ?>
                      <tr>
                        <th><?php echo $no; ?></th>
                        <td><?php echo $row->nama_product; ?></td>
                        <td><?php echo $row->harga; ?></td>
                        <td><?php echo $row->keterangan; ?></td>
                        <td>
                          <div class="form-button-action">
                            <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-warning btn-edit" data-original-title="Edit pembayaran" data-id="<?php echo $row->id_product; ?>" 
                              data-nama_client="<?php echo $row->nama_product; ?>"
                              data-nominal="<?php echo $row->harga; ?>"
                              data-keterangan="<?php echo $row->keterangan; ?>"
                            >
                              <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-danger btn-delete" data-original-title="Hapus pembayaran" data-id="<?php echo $row->id_product; ?>">
                              <i class="fa fa-times"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--ADD RECORD MODAL-->
  <form action="<?php echo site_url('Backend/pembayaran/save'); ?>" method="post">
    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Produk Baru</span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Nama Produk</label>
                    <input name="nama_product" type="text" class="form-control" placeholder="Nama Produk">
                  </div>
                  <div class="form-group form-group-default">
                    <label>Harga</label>
                    <input name="harga" type="text" class="form-control" placeholder="Harga">
                  </div>
                  <div class="form-group form-group-default">
                    <label>Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" placeholder="Keterangan">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer no-bd">
            <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!--EDIT RECORD MODAL-->
  <form action="<?php echo site_url('Backend/pembayaran/edit'); ?>" method="post">
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Edit Produk</span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="nama_product_2" type="text" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="harga_2" type="text" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="keterangan_2" type="text" class="form-control" required="">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer no-bd">
            <input type="hidden" name="kode">
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!--DELETE RECORD MODAL-->
  <form action="<?php echo site_url('Backend/pembayaran/delete'); ?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Hapus Produk</span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-info">
              Anda yakin ingin menghapus data ini?
            </div>
          </div>
          <div class="modal-footer no-bd">
            <input type="hidden" name="id">
            <button type="submit" class="btn btn-primary">Hapus</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<?php $this->load->view('Backend/templates/footer'); ?>
<script>
  $(document).ready(function() {
    $('#add-row').dataTable();

    //Edit Record
    $('.btn-edit').on('click', function() {
      var id = $(this).data('id');
      var nama_product = $(this).data('nama_product');
      var harga = $(this).data('harga');
      var keterangan = $(this).data('keterangan');
      $('[name="kode"]').val(id);
      $('[name="nama_product_2"]').val(nama_product);
      $('[name="harga_2"]').val(harga);
      $('[name="keterangan_2"]').val(keterangan);
      $('#EditModal').modal('show');
    });

    //Delete Record
    $('.btn-delete').on('click', function() {
      var id = $(this).data('id');
      $('[name="id"]').val(id);
      $('#DeleteModal').modal('show');
    });

  });
</script>