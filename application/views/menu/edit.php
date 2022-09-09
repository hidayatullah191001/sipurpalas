         <!-- Begin Page Content -->
         <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>


          <div class="card">

            <div class="card-header">
              <a href="<?=base_url('menu/submenu') ?>"><i class="fas fa-fw fa-arrow-left"></i></a>
              <span>

                Form Ubah Submenu
              </span>
            </div>

            <div class="card-body">
              <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?= $edit->id; ?>">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="title" class="form-control" id="title" name="title" value="<?= $edit->title;?>">
                  <small class="form-text text-danger"><?= form_error('title'); ?></small>
                </div>

                <div class="form-group">
                  <label for="menu_id">Menu</label>
                  <input readonly="" type="text" class="form-control" id="menu_id" name="menu_id" value="<?= $edit->menu_id;?>">
                  <small class="form-text text-danger"><?= form_error('menu_id'); ?></small>
                </div>

                <div class="form-group">
                  <label for="url">URL</label>
                  <input disabled="" type="text" class="form-control" value="<?= $edit->url;?>">
                  <input hidden type="text" class="form-control" id="url" name="url" value="<?= $edit->url;?>">
                  <small class="form-text text-danger"><?= form_error('url'); ?></small>
                </div>

                <div class="form-group">
                  <label for="icon">Icon</label>
                  <input type="text" class="form-control" id="icon" name="icon" value="<?= $edit->icon;?>">
                  <small class="form-text text-danger"><?= form_error('icon'); ?></small>
                </div>

                <div class="form-group">
                  <label for="mobile-id-icon">Aktif</label>
                  <div class='form-check'>
                    <div class="checkbox mt-2">
                      <?php if ($edit->is_active == 0): ?>
                        <?= form_checkbox('is_active','1',FALSE)."Active?";?>
                      <?php endif ?>

                      <?php if ($edit->is_active == 1): ?>
                        <?= form_checkbox('is_active','1',TRUE)."Active?";?>
                      <?php endif ?>
                    </div>
                  </div>
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

