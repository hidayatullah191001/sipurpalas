<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>


  <div class="card shadow">

    <div class="card-header">
      <a href="<?=base_url('operator/quote')?>"><i class="fas fa-fw fa-arrow-left"></i>Kembali</a>
    </div>

    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Quote By*</label>
          <input type="text" class="form-control" name="by" id="by" value="<?=$quote['quote_by'] ?>" placeholder="ex : Thomas Alfa Edinson">
          <?= form_error('by', '<small class="text-danger">', '</small>') ?>
        </div>

        <div class="form-group">
          <label for="title"><strong>Isi*</strong></label>
          <textarea name="isi" id="post_content"><?=$quote['isi'] ?></textarea> 
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