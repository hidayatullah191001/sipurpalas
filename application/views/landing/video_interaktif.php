<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?=base_url('assets2/') ?>/img/hero.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1 class="white-text">Video Interaktif</h1>
				<h4 class="white-text">Dengan video interaktif, semua pelajaran menjadi lebih menarik.</h4>
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
				<!-- row -->
				<div class="row">
					<?php if (count($video) == 0): ?>
					<div class="alert alert-danger">Data video interaktif tidak ditemukan!</div>
					<?php else : ?>
						<?php foreach ($video as $vd): ?>
						<!-- single blog -->
						<div class="col-md-6">
							<div class="single-blog">
								<div class="blog-img">
									<a href="<?=base_url('landing/detail_video/').$vd['id'] ?>">
										<iframe style="width: 100%; height: 230px; border: none;" class="card-img-top"src="https://www.youtube.com/embed/<?=$vd['link'] ?>"></iframe>
									</a>
								</div>
								<h4><a href="<?=base_url('landing/detail_video/').$vd['id'] ?>"><?=$vd['judul'] ?></a></h4>
								<div class="blog-meta">
									<div class="pull-right">
										<span><?php 
										date_default_timezone_set('Asia/Jakarta');
										echo date('d F Y', $vd['date_created']); ?></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /single blog -->
					<?php endforeach ?>
					<?php endif ?>
				</div>
				<!-- /row -->

				<!-- <div class="row">
					<div class="col-md-12">
						<div class="post-pagination">
							<a href="#" class="pagination-back pull-left">Back</a>
							<ul class="pages">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
							</ul>
							<a href="#" class="pagination-next pull-right">Next</a>
						</div>
					</div>
				</div> -->
			</div>
			<!-- /main blog -->

			