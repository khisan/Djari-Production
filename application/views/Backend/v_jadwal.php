<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Backend/templates/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 id="judul-page">Jadwal</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="#" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#addRowModal"><i class="fas fa-plus"></i>Tambah Data</a>
            </div>
            <div class="card-body">
              <!-- <div class="table-responsive"> -->
                <table class="table table-striped" id="table-1"  style="border-collapse: separate">
                  <thead>
                    <tr>
                      <th style="text-align: center">No</th>
                      <th style="text-align: center">Tanggal</th>
                      <th style="text-align: center">Nama</th>
                      <th style="text-align: center">Alamat</th>
                      <th style="text-align: center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    foreach ($data->result() as $row):
                    $no++;
                  ?>
                    <tr>
                      <td style="text-align: center"><?php echo $no; ?></td>
                      <td style="text-align: center"><?php echo $row->tanggal; ?></td>
                      <td style="text-align: center"><?php echo $row->nama; ?></td>
                      <td style="text-align: center"><?php echo $row->alamat; ?></td>
                      <td style="text-align: center">
                        <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-warning btn-edit" data-original-title="Edit Jadwal" data-id="<?php echo $row->id_jadwal; ?>" data-tanggal="<?php echo $row->tanggal;?>" data-nama="<?php echo $row->nama;?>" data-alamat="<?php echo $row->alamat;?>">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-danger btn-delete" data-original-title="Hapus Jadwal" data-id="<?php echo $row->id_jadwal; ?>">
                          <i class="fa fa-times"></i>
                        </a>
                        <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-success btn-done" data-original-title="Done Jadwal" data-id="<?php echo $row->id_jadwal; ?>" data-tanggal="<?php echo $row->tanggal;?>" data-nama="<?php echo $row->nama;?>" data-alamat="<?php echo $row->alamat;?>">
                          Done
                        </a>
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
  <form action="<?php echo site_url('Backend/Jadwal/save');?>" method="post">
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
                    <input name="tanggal" type="date" class="form-control" placeholder="Tanggal">
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
  <form action="<?php echo site_url('Backend/Jadwal/edit');?>" method="post">
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Edit Jadwal</span>
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
                    <input name="tanggal_2" type="date" class="form-control" placeholder="Tanggal" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="nama_2" type="text" class="form-control" placeholder="Nama" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="alamat_2" type="text" class="form-control" placeholder="Alamat" required="">
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
  <form action="<?php echo site_url('Backend/Jadwal/delete');?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Hapus Jadwal</span>
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

  <!--DONE RECORD MODAL-->
  <form action="<?php echo site_url('Backend/Jadwal/done');?>" method="post">
    <div class="modal fade" id="DoneModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Done Jadwal</span>
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
                    <input name="id_3" type="text" class="form-control" placeholder="Id Jadwal" required="" disabled>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="tanggal_3" type="date" class="form-control" placeholder="Tanggal" required="" disabled>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="nama_3" type="text" class="form-control" placeholder="Nama" required="" disabled>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <input name="alamat_3" type="text" class="form-control" placeholder="Alamat" required="" disabled>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer no-bd">
            <input type="hidden" name="kode">
            <button type="submit" class="btn btn-primary">Kirim</button>
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
      var tanggal = $(this).data('tanggal');
      var nama = $(this).data('nama');
      var alamat = $(this).data('alamat');
      $('[name="kode"]').val(id);
      $('[name="tanggal_2"]').val(tanggal);
      $('[name="nama_2"]').val(nama);
      $('[name="alamat_2"]').val(alamat);
      $('#EditModal').modal('show');
    });

    //Delete Record
    $('.btn-delete').on('click', function() {
      var id = $(this).data('id');
      $('[name="id"]').val(id);
      $('#DeleteModal').modal('show');
    });

    //Done Record
    $('.btn-done').on('click', function() {
      var id = $(this).data('id');
      var tanggal = $(this).data('tanggal');
      var nama = $(this).data('nama');
      var alamat = $(this).data('alamat');
      $('[name="kode"]').val(id);
      $('[name="tanggal_3"]').val(tanggal);
      $('[name="nama_3"]').val(nama);
      $('[name="alamat_3"]').val(alamat);
      $('#DoneModal').modal('show');
    });

    $('#table-1').DataTable({
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copy',
          title: function() {
            return $("#judul-page").text()
          },
          exportOptions: {
            // columns: ':visible'
            columns: ':not(.notexport)',

          }
        },
        {
          extend: 'csv',
          title: function() {
            return $("#judul-page").text()
          },
          exportOptions: {
            // columns: ':visible'
            columns: ':not(.notexport)',


          }
        },
        {
          extend: 'excel',
          title: function() {
            return $("#judul-page").text()
          },
          exportOptions: {
            // columns: ':visible'
            columns: ':not(.notexport)',


          }
        },
        {
          extend: 'pdf',
          orientation: 'landscape',
          pageSize: 'LEGAL',
          title: function() {
            return $("#judul-page").text()
          },
          exportOptions: {
            columns: ':not(.notexport)',
            modifier: {
              alignment: 'center'
            }
            //aligment: 'center',
            // columns: ':visible'
          },
        },
        {
          extend: 'print',
          title: function() {
            return $("#judul-page").text()
          },
          exportOptions: {
            // columns: ':visible'
            columns: ':not(.notexport)',

          }
        },
      ],
      "lengthMenu": [
        [5, 10, 15, 20, 25, 30, -1],
        [5, 10, 15, 20, 25, 30, "All"]
      ]
    });
  });
</script>