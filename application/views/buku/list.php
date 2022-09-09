         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
          <?= $this->session->flashdata('message') ?>

          <div class="row">
            <?php foreach ($buku as $bk): ?>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card shadow-lg border-0">
                  <?php if ($bk['thumbnail'] == ''): ?>
                    <img style="width: 100%; height: 200px; object-fit: cover" class="card-img-top" src="https://asset.kompas.com/crops/mTnVdoYXCoN9ElxrsEDbdoY7y0s=/65x65:865x599/750x500/data/photo/2017/06/28/1265845835.jpg" alt="Card image cap">
                    <?php else : ?>
                      <img  style="width: 100%; height: 200px; object-fit: cover" class="card-img-top" src="<?=base_url('assets/data/upload/').$bk['thumbnail'] ?>" alt="Card image cap">
                    <?php endif ?>
                    <div class="card-body">
                      <h4><?php
                      $kalimat = $bk['judul'];
                      $max = 20 ;
                      $cetak = substr($kalimat, 0, $max);
                      if (strlen($kalimat)>$max) {
                        echo $cetak.'...';
                      }else{
                        echo $cetak;
                      }?></h4>
                      <span class="badge badge-primary">Kategori : <?=$bk['kategori']?></span>
                      <p>Penulis : <?=$bk['penulis'] ?></p>
                      <?php if($bk['link'] != '' && $bk['file'] == ''): ?>
                        <a target="_blank" href="<?=$bk['link'] ?>" type="button" class="btn btn-success btn-sm">Link</a>
                        <?php elseif($bk['file'] != '' && $bk['link'] == ''):?>
                          <a target="_blank" href="<?=base_url('assets/data/upload/').$bk['file'] ?>" type="button" class="btn btn-success btn-sm">File</a>
                          <?php elseif($bk['link'] != '' && $bk['file'] != ''): ?>
                            <a target="_blank" href="<?=$bk['link'] ?>" type="button" class="btn btn-success btn-sm">Link</a>
                            <a target="_blank" href="<?=base_url('assets/data/upload/').$bk['file'] ?>" type="button" class="btn btn-success btn-sm">File</a>
                          <?php endif ?>
                        </div>
                        <div class="card-footer border-0">
                          <div class="float-right">
                            <a href="<?=base_url('buku/edit/').$bk['id']?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i> Edit</a>
                            <a href="<?=base_url('buku/lihat/').$bk['id']?>" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-eye"></i> Lihat</a>
                            <a data-toggle="modal" data-target="#deleteModal<?=$bk['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i> Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php include 'delete_modal.php' ?>
                  <?php endforeach ?>

                </div>

              </div>
              <!-- /.container-fluid -->

            </div>

