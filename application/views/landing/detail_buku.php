<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url('<?=base_url('assets/data/upload/').$buku['thumbnail'] ?>')"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1 class="white-text"><?=$buku['judul']?></h1>
				<ul class="blog-post-meta">
					<li class="blog-meta-author">Penulis : <a href="#"><?=$buku['penulis'] ?></a></li>
					<li><?php 
					date_default_timezone_set('Asia/Jakarta');
					echo date('d F Y', $buku['date_created']); ?></li>
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
					<!-- <embed style="width: 100%;height: 900px " type="application/pdf" src="<?=base_url('assets/data/upload/').$buku['file'] ?>"></embed> -->

					<?php $info = pathinfo($buku['file']);?>

					<?php if ($info['extension'] == 'pdf'): ?>
						<embed style="width: 100%;height: 900px " type="application/pdf" src="<?=base_url('assets/data/upload/').$buku['file'] ?>"></embed>
						<?php elseif($info['extension'] == 'pptx' || $info['extension'] == 'ppt' ): ?>
							<a class="main-button icon-button" href="<?=base_url('assets/data/upload/').$buku['file'] ?>">Download PPT</a>
						<?php endif ?>
						<br><br>
						<?=$buku['catatan'] ?>
					</div>
					<!-- /blog post -->

				</div>
			<!-- /main blog -->