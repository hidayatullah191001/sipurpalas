


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
  <div class="card shadow-lg border-0">
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Nama*</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama...">
          <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Link Referensi*</label>
          <input type="text" class="form-control" name="link" id="link" placeholder="Masukkan link referensi...">
          <?= form_error('link', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Catatan</label>
          <textarea name="catatan" id="post_content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
      </form>
    </div>
    <div style="font-size: 12px" class="card-footer text-danger border-0">* Wajib Diisi</div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


