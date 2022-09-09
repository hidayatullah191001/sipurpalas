<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Perpustakaan Digital</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?=base_url('assets2/')?>css/bootstrap.min.css"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?=base_url('assets2/')?>css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?=base_url('assets2/')?>css/style.css"/>
</head>
<body>

	<!-- Header -->
	<header id="header" class="transparent-nav">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="<?=base_url('landing') ?>">
						<img src="<?=base_url('assets/img/logo4.png')?>" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<span></span>
				</button>
				<!-- /Mobile toggle -->
			</div>

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					<li><a href="<?=base_url('landing')?>">Home</a></li>
					<li><a href="<?=base_url('landing/profile') ?>">Profile</a></li>
					<li><a href="<?=base_url('landing/koleksi')?>">Koleksi</a></li>
					<li><a href="<?=base_url('landing/referensi') ?>">Referensi</a></li>
					<li><a href="<?=base_url('landing/video_interaktif') ?>">Video Interaktif</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->
		</div>
	</header>
<!-- /Header -->