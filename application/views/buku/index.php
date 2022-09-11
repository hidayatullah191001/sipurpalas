<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
  <div class="card shadow-lg border-0">
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Judul*</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul...">
          <?= form_error('judul', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Penulis*</label>
          <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Masukkan penulis...">
          <?= form_error('penulis', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group mb-3"> 
          <label for="exampleInputEmail1" class="font-weight-bold">Link</label>
          <input type="text" class="form-control" name="link" id="link" placeholder="Masukkan link...">
          <?= form_error('link', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">File</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="buku" id="buku">
            <label class="custom-file-label" for="file">Choose file</label>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Kategori*</label>
          <select name="id_kategori" class="form-control" id="exampleFormControlSelect1">
            <option disabled="" selected="">Pilih kategori...</option>
            <?php foreach ($kategori as $kg): ?>
              <option value="<?=$kg['id']?>"><?=$kg['kategori'] ?></option>
            <?php endforeach ?>
          </select>
          <?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Thumbnail*</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="thumbnail" id="inputGroupFile01" required="">
            <label class="custom-file-label" for="inputGroupFile01">Choose Thumbnail</label>
          </div>
        </div>


        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Catatan</label>
          <textarea name="catatan" id="post_content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
      </form>
    </div>
    <div style="font-size: 12px" class="card-footer text-danger border-0">
      * Wajib diisi <br>
      ** Upload file dengan format pdf atau ppt
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


