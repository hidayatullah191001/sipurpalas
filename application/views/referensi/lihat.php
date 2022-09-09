         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
          <?= $this->session->flashdata('message') ?>
          <div class="card shadow-lg border-0">
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable" class="table table-hover">
              <thead class="bg-primary text-white">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Link Referensi</th>
                  <th scope="col">Catatan</th>
                  <th scope="col">Tanggal Buat</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $i = 1;
                foreach ($referensi as $rf): ?>
                  <tr>
                    <th scope="row"><?=$i++ ?></th>
                    <td><?=$rf['nama'] ?></td>
                    <td><a target="_blank" href="<?=$rf['link'] ?>" class="btn btn-primary btn-sm">Buka Referensi</a></td>
                    <td>
                      <?php
                      $kalimat = $rf['catatan'];
                      if ($kalimat == '') {
                        echo "<span class='badge badge-danger'>Tidak Ada Catatan</span>";
                      }else{
                        $max = 19;
                        $cetak = substr($kalimat, 0, $max);
                        if (strlen($kalimat)>$max) {
                          echo $cetak.'...';
                        }else{
                          echo $cetak;
                        }
                      }?>
                    </td>
                    <td>
                      <?php 
                      date_default_timezone_set('Asia/Jakarta');
                      echo date('d F Y H:i', $rf['date_created']); ?> WIB
                    </td>
                    <td>
                      <a href="<?=base_url('referensi/edit/').$rf['id']?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i> Edit</a>
                      <a data-toggle="modal" data-target="#deleteModal<?=$rf['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php include 'delete_modal.php' ?>
                <?php endforeach ?>
              </tbody>
            </table>
              </div>
              
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#datatable').DataTable();
      } );
    </script>


