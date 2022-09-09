<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url('https://d29fhpw069ctt2.cloudfront.net/photo/7133/preview/6942f584-6316-4a30-afba-5189f536cf99_1280x1280.jpg')"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1 class="white-text"><?=$referensi['nama']?></h1>
				<ul class="blog-post-meta">
					<li><?php 
					date_default_timezone_set('Asia/Jakarta');
					echo date('d F Y', $referensi['date_created']); ?></li>
				</ul>
			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->
<!-- Blog -->
<div id="blog" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- main blog -->
			<div id="main" class="col-md-9">

				<!-- blog post -->
				<div class="blog-post">
					<a target="_blank" href="<?=$referensi['link'] ?>" class="main-button icon-button">Menuju Referensi</a>
					<br><br>
					<?=$referensi['catatan'] ?>
				</div>
				<!-- /blog post -->

			</div>
			<!-- /main blog -->