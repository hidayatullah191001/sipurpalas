<script type="text/javascript" src="<?=base_url('assets/') ?>vendor/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: "#post_content",
    height : 250,
    plugins: [
    "advlist autolink lists link image media charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen",
    "insertdatetime nonbreaking save table contextmenu directionality",
    "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media responsivefilemanager",
    automatic_uploads: true,
    image_advtab: true,
    images_upload_url: "<?php echo base_url("buku/tinymce_upload")?>",
    file_picker_types: 'image', 
    paste_data_images:true,
    relative_urls: false,
    remove_script_host: false,
    file_picker_callback: function(cb, value, meta) {
     var input = document.createElement('input');
     input.setAttribute('type', 'file');
     input.setAttribute('accept', 'image/*');
     input.onchange = function() {
      var file = this.files[0];
      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
       var id = 'post-image-' + (new Date()).getTime();
       var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
       var blobInfo = blobCache.create(id, file, reader.result);
       blobCache.add(blobInfo);
       cb(blobInfo.blobUri(), { title: file.name });
     };
   };
   input.click();
 }
});
</script>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 mb-5"><?=$title ?></h1>
  <div class="card shadow-lg border-0">
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Judul*</label>
          <input type="text" class="form-control" name="judul" id="judul" value="<?=$buku['judul']?>" placeholder="Masukkan judul...">
          <?= form_error('judul', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Penulis*</label>
          <input type="text" class="form-control" name="penulis" id="penulis" value="<?=$buku['penulis']?>" placeholder="Masukkan penulis...">
          <?= form_error('penulis', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group mb-3"> 
          <label for="exampleInputEmail1" class="font-weight-bold">Link</label>
          <input type="text" class="form-control" name="link" value="<?=$buku['link']?>" id="link" placeholder="Masukkan link...">
          <?= form_error('link', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
           <input type="text" name="oldfile" value="<?=$buku['file']?>" hidden="">
          <p>File Lama : <?=$buku['file'] ?></p>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">File</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="file" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Kategori*</label>
          <select name="id_kategori" class="form-control" id="exampleFormControlSelect1">
            <option disabled="" selected="">Pilih kategori...</option>
            <?php foreach ($kategori as $kg): ?>
              <?php if ($kg['id'] == $buku['id_kategori']): ?>
                <option selected="" value="<?=$kg['id']?>"><?=$kg['kategori'] ?></option>
              <?php else : ?>
                <option  value="<?=$kg['id']?>"><?=$kg['kategori'] ?></option>
              <?php endif ?>
            <?php endforeach ?>
          </select>
          <?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Thumbnail Lama</label><br>
          <?php if ($buku['thumbnail'] == ''): ?>
            <img style="width: 150px; height:100px; object-fit: cover" src="https://asset.kompas.com/crops/mTnVdoYXCoN9ElxrsEDbdoY7y0s=/65x65:865x599/750x500/data/photo/2017/06/28/1265845835.jpg">
          <?php else : ?>
           <img style="width: 100px; height:100px; object-fit: cover" src="<?=base_url('assets/data/thumbnail/').$buku['thumbnail'] ?>">
          <?php endif ?>
          <input type="text" name="oldthumbnail" hidden="" value="<?=$buku['thumbnail']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Thumbnail</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="thumbnail" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose Thumbnail</label>
          </div>
        </div>

        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="font-weight-bold">Catatan</label>
          <textarea name="catatan" id="post_content"><?=$buku['catatan']?></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
      </form>
    </div>
    <div style="font-size: 12px" class="card-footer text-danger border-0">* Wajib Diisi</div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


