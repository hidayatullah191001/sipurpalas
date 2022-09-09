         <!-- Begin Page Content -->
         <div class="container-fluid">

         	<!-- Page Heading -->
         	<h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
            <div class="col-md-7 p-0">
               <div class="card shadow-lg border-0">
                  <div class="card-body">
                     <form method="post">
                       <div class="form-group mb-3">
                         <label for="exampleInputEmail1" class="font-weight-bold">Edit Kategori Baru</label>
                         <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan kategori..." value="<?=$kategori['kategori'] ?>">
                      </div>
                      <button type="submit" class="btn btn-primary btn-sm">Perbarui</button>
                   </form>
                </div>
             </div>
          </div>
       </div>
       <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

