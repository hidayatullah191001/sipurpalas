         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
          <?= $this->session->flashdata('message') ?>

          <div class="card shadow-lg border-  0">
            <div class="card-header border-0">
              <a href="<?=base_url('buku/list') ?>"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <img class="img-fluid" src="<?=base_url('assets/data/thumbnail/').$buku['thumbnail'] ?>">
                </div>
                <div class="col">
                  <h3><?=$buku['judul'] ?></h3>
                  <span class="badge badge-primary">Kategori : <?=$buku['kategori'] ?></span>
                  <p>Penulis : <strong><?=$buku['penulis'] ?></strong></p>
                  <p><?=$buku['catatan'] ?></p>

                  <?php if($buku['link'] != '' && $buku['file'] == ''): ?>
                    <a target="_blank" href="<?=$buku['link'] ?>" type="button" class="btn btn-success btn-sm">Link</a>
                    <?php elseif($buku['file'] != '' && $buku['link'] == ''):?>
                      <a target="_blank" href="<?=base_url('assets/data/buku/').$buku['file'] ?>" type="button" class="btn btn-success btn-sm">File</a>
                      <?php elseif($buku['link'] != '' && $buku['file'] != ''): ?>
                        <a target="_blank" href="<?=$buku['link'] ?>" type="button" class="btn btn-success btn-sm">Link</a>
                        <a target="_blank" href="<?=base_url('assets/data/buku/').$buku['file'] ?>" type="button" class="btn btn-success btn-sm">File</a>
                      <?php endif ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->

          </div>

