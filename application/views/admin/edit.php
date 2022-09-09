         <!-- Begin Page Content -->
         <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>


          <div class="card">

            <div class="card-header">
              <a href="<?=base_url('admin/manage') ?>"><i class="fas fa-fw fa-arrow-left"></i></a>
              <span>
                User Management
              </span>
            </div>

            <div class="card-body">
              <form action="" method="post">
                <input type="hidden" name="id" value="<?= $edit->id; ?>">
                <div class="form-group">
                  <label for="title">Nama</label>
                  <input type="title" class="form-control" id="name" name="name" value="<?= $edit->name;?>">
                  <small class="form-text text-danger"><?= form_error('name'); ?></small>
                </div>

                <div class="form-group">
                  <label for="url">Email</label>
                  <input type="text" class="form-control" id="email" name="email" value="<?= $edit->email;?>" readonly>
                  <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>

                <div class="form-group">
                  <label for="icon">Role</label>
                  <select id="same" class="form-control" id="role_id" name="role_id">
                    <?php foreach ($role as $rl) :?>
                      <?php if ($edit->role_id == $rl['id']) { 
                          echo "<option selected value= '".$rl['id']."'>".$rl['role']."</option>'";
                        }else{
                          echo "<option value= '".$rl['id']."'>".$rl['role']."</option>'";
                        }?>
                    <?php endforeach ?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('role_id'); ?></small>
                </div>

                <div class="form-group">
                  <label for="mobile-id-icon">Aktif</label>
                  <div class='form-check'>
                    <div class="checkbox mt-2">
                      <?php if ($edit->is_active == 0): ?>
                        <?= form_checkbox('is_active','1',FALSE)."Aktif kan Akun";?>
                      <?php endif ?>

                      <?php if ($edit->is_active == 1): ?>
                        <?= form_checkbox('is_active','1',TRUE)."Aktif kan Akun";?>
                      <?php endif ?>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary float-right">Submit</button>
              </form>
            </div>
          </div>

          <br>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
