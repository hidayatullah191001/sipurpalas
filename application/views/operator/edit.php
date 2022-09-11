<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>


  <div class="card shadow">

    <div class="card-header">
      <a href="<?=base_url('operator/profile')?>"><i class="fas fa-fw fa-arrow-left"></i>Kembali</a>
    </div>

    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Nama Kepala Sekolah*</label>
          <input type="text" class="form-control" name="nama" id="nama" value="<?=$profile['nama'] ?>" placeholder="Masukkan nama kepala sekolah...">
          <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Foto Lama</label><br>
          <img style="width: 100px; height: 100px; object-fit:cover;" src="<?=base_url('assets/data/kepsek/').$profile['foto'] ?>">
          <input type="text" name="oldfoto" hidden="" value="<?=$profile['foto'] ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Foto Profile</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="foto" id="foto">
            <label class="custom-file-label" for="file">Choose file</label>
          </div>
        </div>

        <div class="form-group">
          <label for="title" class="font-weight-bold">Sambutan</label>
          <textarea name="sambutan" class="form-control" placeholder="Masukann sambutan kepala sekolah..."><?=$profile['sambutan'] ?></textarea> 
          <small class="form-text text-danger"><?= form_error('isi'); ?></small>
        </div>

        <div class="form-group">
          <label for="title">Isi</label>
          <textarea name="isi" id="post_content"><?=$profile['isi'] ?></textarea> 
          <small class="form-text text-danger"><?= form_error('isi'); ?></small>
        </div>

        <div class="form-group">
          <center>
            <button type="submit" class="btn btn-primary">Edit</button>
          </center>
        </div>
      </form>
    </div>
  </div>

  <br>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->