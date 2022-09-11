<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=$title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Custom styles for this template-->
    <link type="text/css" href="<?=base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?=base_url('assets/') ?>vendor/summernote/summernote-bs4.min.css" rel="stylesheet">

    <script type="text/javascript" src="<?=base_url('assets/')?>vendor/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/')?>vendor/js/bootstrap.bundle.min.js"></script>
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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">