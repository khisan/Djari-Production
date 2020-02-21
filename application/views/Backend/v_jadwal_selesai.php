<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Backend/templates/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Jadwal Selesai</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="table-1">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    foreach ($data->result() as $row):
                    $no++;
                  ?>
                    <tr>
                      <th><?php echo $no; ?></th>
                      <td><?php echo $row->tanggal; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->alamat; ?></td>
                      <td>
                        <div class="form-button-action">
                          <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-danger btn-delete" data-original-title="Hapus Jadwal"  data-id="<?php echo $row->id_jadwal_selesai; ?>">
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
  <!--DELETE RECORD MODAL-->
  <form action="<?php echo site_url('Backend/Jadwal_selesai/delete');?>" method="post">
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
</div>
<?php $this->load->view('Backend/templates/footer'); ?>

<script>
  $(document).ready(function() {

    //Delete Record
    $('.btn-delete').on('click', function() {
      var id = $(this).data('id');
      $('[name="id"]').val(id);
      $('#DeleteModal').modal('show');
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
