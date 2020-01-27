<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Backend/templates/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Jadwal</h1>
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
                      <th scope="col">Tanggal</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Paket</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>tetew</td>
                    </tr>
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
  <form action="<?php echo site_url('administrator/Tag/save');?>" method="post">
    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Jadwal Baru</span>
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
                    <label>Tanggal</label>
                    <input name="tgl" type="date" class="form-control" placeholder="Tanggal">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Alamat</label>
                    <textarea name="alamat" type="text" class="form-control" placeholder="Alamat"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <div class="form-group">
                      <label>Paket</label>
                      <select class="custom-select">
                        <option selected>Pilih Paket</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
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
  <form action="<?php echo site_url('administrator/Tag/edit');?>" method="post">
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Edit Tag</span>
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
                    <input name="nama_tag2" type="text" class="form-control" placeholder="Nama Kategori" required="">
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
  <form action="<?php echo site_url('administrator/Tag/delete');?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Hapus Tag</span>
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
      var name = $(this).data('tag');
      $('[name="kode"]').val(id);
      $('[name="nama_tag2"]').val(name);
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