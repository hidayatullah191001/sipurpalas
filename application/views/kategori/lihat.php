         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
          <?= $this->session->flashdata('message') ?>
          <div class="col-md-7 p-0">
           <div class="card shadow-lg border-0">
            <div class="card-body">
             <table class="table table-hover">
              <thead class="bg-primary text-white">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $i = 1;
                foreach ($kategori as $kg): ?>
                  <tr>
                    <th scope="row"><?=$i++ ?></th>
                    <td><?=$kg['kategori'] ?></td>
                    <td>
                      <a href="<?=base_url('kategori/edit/').$kg['id']?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i> Edit</a>
                      <a data-toggle="modal" data-target="#deleteModal<?=$kg['id']?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i> Hapus</a>
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

