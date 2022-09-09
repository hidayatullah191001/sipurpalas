         <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>
            <a href="<?=base_url('operator/tambah_profile') ?>" class="btn btn-primary btn-icon-split mb-3">
               <span class="icon text-white-20">
                <i class="fas fa-fw fa-plus"></i>
             </span>
             <span class="text">Tambah Profile</span></a>
             <?php echo $this->session->flashdata('message') ?>
             <br>
             <br>
             <?php foreach ($profile as $pr): ?>
                <div class="card shadow-lg border-0">
                  <div class="card-header">
                     <a href="<?=base_url('operator/edit_profile/').$pr['id']?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i> Edit</a>
                     <a data-toggle="modal" data-target="#deleteModal<?=$pr['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i> Hapus</a>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="card">
                              <div class="card-body">
                                 <?=$pr['isi'] ?>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <img style="width: 100%" src="<?=base_url('assets/data/kepsek/').$pr['foto'] ?>">
                                 <center>
                                    <h5><strong><?=$pr['nama'] ?></strong></h5>
                                    <i>Kepala Sekolah</i><br><br>
                                    <p><?=$pr['sambutan'] ?></p>
                                 </center>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php include 'delete_modal.php' ?>
            <?php endforeach ?>
         </div>
         <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->