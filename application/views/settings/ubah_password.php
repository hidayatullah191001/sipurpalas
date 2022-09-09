<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h4 class="font-weight-bold text-pks py-3 mb-0"><?= $title ?></h4>

  <div class="row">
    <div class="col-sm-6">
      <?= $this->session->flashdata('message') ?>
      <div class="card shadow-lg my-5 border-0">
        <div class="card-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="" class="text-pks font-weight-bold">Kata sandi baru</label>
              <input type="password" class="form-control text-pks" id="password1" name="password1" placeholder="Masukkan password...">
              <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
            </div>

            <div class="form-group">
              <label for="" class="text-pks font-weight-bold">Ulangi Password</label>
              <input type="password" class="form-control text-pks" id="password2" name="password2" placeholder="Ulangi password...">
              <?= form_error('password2', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
              <input type="checkbox" id="cek">
              <label class="form-check-label text-pks" for="exampleCheck1">Lihat Kata Sandi</label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<!-- /.container-fluid -->

<script type="text/javascript">
  const cek = document.getElementById('cek');
  var pw1 = document.getElementById('password1');
  var pw2 = document.getElementById('password2');
  cek.addEventListener('click', function(){
    if (cek.checked == true) {
      pw1.type = 'text';
      pw2.type = 'text';
    }else{
      pw1.type = 'password';
      pw2.type = 'password';
    }
  });
</script>