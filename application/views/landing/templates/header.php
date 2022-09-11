<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Perpustakaan Digital | SMA Negeri 14 Palembang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/animate.css">
    
    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/aos.css">

    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url('assets2/')?>css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

      <a class="navbar-brand" href="index.html"><img style="width: 200px;" src="<?=base_url('assets/img/logo3.png') ?>" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item <?=($title == 'Home')? 'active' : '' ?>"><a href="<?=base_url('landing') ?>" class="nav-link">Home</a></li>
          <li class="nav-item <?=($title == 'Profile')? 'active' : '' ?>"><a href="<?=base_url('landing/profile') ?>" class="nav-link">Profile</a></li>
          <li class="nav-item <?=($title == 'Koleksi')? 'active' : '' ?>"><a href="<?=base_url('landing/koleksi') ?>" class="nav-link">Koleksi</a></li>
          <li class="nav-item <?=($title == 'Referensi')? 'active' : '' ?>"><a href="<?=base_url('landing/referensi') ?>" class="nav-link">Referensi</a></li>
          <li class="nav-item <?=($title == 'Video Interaktif')? 'active' : '' ?>"><a href="<?=base_url('landing/video_interaktif') ?>" class="nav-link">Video Interaktif</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->