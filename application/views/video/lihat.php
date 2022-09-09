         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
          <?= $this->session->flashdata('message') ?>

          <div class="row">
            <?php foreach ($video as $vd): ?>
              <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="card shadow-lg border-0">
                  <iframe style="border: none;" class="card-img-top" height="285" src="https://www.youtube.com/embed/<?=$vd['link'] ?>"></iframe>
                  <div class="card-body">
                    <i class="fas fa-calendar mb-4"><span class="ml-2"><?php 
                    date_default_timezone_set('Asia/Jakarta');
                    echo date('d F Y H:i', $vd['date_created']); ?> WIB</span></i>
                    <h4>
                      <strong>
                        <?php
                        $kalimat = $vd['judul'];
                        $max = 35 ;
                        $cetak = substr($kalimat, 0, $max);
                        if (strlen($kalimat)>$max) {
                          echo $cetak.'...';
                        }else{
                          echo $cetak;
                        }
                        ?>
                      </strong>
                    </h4>
                    <br>
                    <?php
                    $kalimat = $vd['catatan'];
                    if ($kalimat == '') {
                      echo "<span class='badge badge-danger'>Tidak Ada Catatan</span>";
                    }else{
                      $max = 35 ;
                      $cetak = substr($kalimat, 0, $max);
                      if (strlen($kalimat)>$max) {
                        echo $cetak.'...';
                      }else{
                        echo $cetak;
                      }
                    }?>
                  </div>
                  <div class="card-footer border-0">
                    <div class="float-right">
                      <a href="<?=base_url('video/edit/').$vd['id']?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i> Edit</a>
                      <a data-toggle="modal" data-target="#deleteModal<?=$vd['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i> Hapus</a>
                    </div>

                  </div>
                </div>
              </div>
              <?php include 'delete_modal.php' ?>
            <?php endforeach ?>
          </div>
        </div>
        <br><br><br>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

