         <!-- Begin Page Content -->
         <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>


          <div class="card">

            <div class="card-header">
              <a href="<?=base_url('menu') ?>"><i class="fas fa-fw fa-arrow-left"></i></a>
              <span>
                Form Ubah Menu
              </span>
            </div>

            <div class="card-body">
              <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?= $edit->id; ?>">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="title" class="form-control" id="menu" name="menu" value="<?= $edit->menu;?>">
                  <small class="form-text text-danger"><?= form_error('menu'); ?></small>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
              </form>
            </div>
          </div>

          <br>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

