<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('Backend/templates/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Client</h1>
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
                      <th scope="col">Nama Client</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Nama Produk</th>
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
                        <td><?php echo $row->nama_client; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td><?php echo $row->nama_product; ?></td>
                        <td>
                          <div class="form-button-action">
                            <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-warning btn-edit" data-original-title="Edit Client" data-id="<?php echo $row->id_client; ?>" 
                              data-nama_client="<?php echo $row->nama_client; ?>"
                              data-alamat="<?php echo $row->alamat; ?>"
                              data-id_product="<?php echo $row->id_product; ?>"
                            >
                              <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-danger btn-delete" data-original-title="Hapus Client" data-id="<?php echo $row->id_client; ?>">
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
  <form action="<?php echo site_url('Backend/client/save'); ?>" method="post">
    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Client Baru</span>
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
                    <label>Nama Client</label>
                    <input name="nama_client" type="text" class="form-control" placeholder="Nama Client">
                  </div>
                  <div class="form-group form-group-default">
                    <label>Alamat</label>
                    <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Nama Produk</label>
                        <select class="form-control form-control" name="id_product" id="defaultSelect">
                          <option>Pilih Produk</option>
                          <?php foreach ($produk->result() as $row) : ?>
                            <option value="<?php echo $row->id_product; ?>"><?php echo $row->nama_product; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
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
  <form action="<?php echo site_url('Backend/client/edit'); ?>" method="post">
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Edit Client</span>
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
                    <input name="nama_client_2" type="text" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="alamat_2" type="text" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <select class="form-control form-control" name="id_product_2" id="defaultSelect">
                      <option>Pilih Produk</option>
                      <?php foreach ($produk->result() as $row) : ?>
                        <option value="<?php echo $row->id_product; ?>"><?php echo $row->nama_product; ?></option>
                      <?php endforeach; ?>
                    </select>
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
  <form action="<?php echo site_url('Backend/client/delete'); ?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Hapus Client</span>
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
      var nama_client = $(this).data('nama_client');
      var alamat = $(this).data('alamat');
      var id_product = $(this).data('id_product');
      $('[name="kode"]').val(id);
      $('[name="nama_client_2"]').val(nama_client);
      $('[name="alamat_2"]').val(alamat);
      $('[name="id_product_2"]').val(id_product);
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