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
    images_upload_url: "<?php echo base_url("referensi/tinymce_upload")?>",
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


