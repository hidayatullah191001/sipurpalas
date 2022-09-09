         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
            <div class="col-md-7 p-0">
               <div class="card shadow-lg border-0">
                  <div class="card-body">
                     <form method="post">
                      <div class="form-group mb-3">
                       <label for="exampleInputEmail1" class="font-weight-bold">Tambah Kategori Baru*</label>
                       <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan kategori...">
                       <?= form_error('kategori', '<small class="text-danger">', '</small>') ?>

                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                 </form>
              </div>
              <div style="font-size: 12px" class="card-footer text-danger border-0">
                 * Wajib Diisi
              </div>
           </div>
        </div>
     </div>
     <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

