         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>
          <?= $this->session->flashdata('message') ?>


          <div id="accordion">
            <div class="card shadow-lg border-0" style="border-radius: 15px">
               <div class="card-header border-0" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Tambah Quote
                  </button>
               </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
               <div class="card-body">
                  <form method="post" action="">
                     <div class="form-group">
                        <label><strong>Quote By*</strong></label>
                        <input type="text" name="by" id="by" class="form-control" placeholder="ex: Thomas Alfa Edison">
                        <?= form_error('by', '<small class="text-danger">', '</small>') ?>

                     </div>
                     <div class="form-group">
                        <label><strong>Isi*</strong></label>
                        <textarea name="isi" id="post_content"></textarea>
                        <?= form_error('isi', '<small class="text-danger">', '</small>') ?>

                     </div>
                     <div class="form-group">
                        <button class="btn btn-primary btn-sm">Tambah Quote</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <br>
      <div class="card">
         <div class="card-body">
            <table class="table">
               <thead class="bg-primary text-white">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Quote By</th>
                     <th scope="col">Isi</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($quote as $qt): ?>
                     <tr>
                        <th scope="row"><?=$i++ ?></th>
                        <td><?=$qt['quote_by'] ?></td>
                        <td><?php 
                        $kalimat = $qt['isi'];
                        $max = 19;
                        $cetak = substr($kalimat, 0, $max);
                        if (strlen($kalimat)>$max) {
                          echo $cetak.'...';
                       }else{
                          echo $cetak;
                       }
                       ?></td>
                       <td>
                        <a href="<?=base_url('operator/edit_quote/').$qt['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i> Edit</a>
                        <a data-toggle="modal" data-target="#deleteModal<?=$qt['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i> Hapus</a>
                     </td>
                  </tr>
                  <?php include 'delete_quote.php'?>
               <?php endforeach ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

