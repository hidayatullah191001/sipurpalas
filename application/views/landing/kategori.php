<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?=base_url('assets2/') ?>/img/hero.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1 class="white-text">Koleksi</h1>
				<h4 class="white-text">Koleksi buku-buku dari berbagai sumber dan berbagai kategori</h4>
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
					<?php if (count($buku) == 0): ?>
					<div class="alert alert-danger">Data buku di kategori ini tidak ditemukan!</div>
					<?php else : ?>
						<?php foreach ($buku as $bk): ?>
						<!-- single blog -->
						<div class="col-md-6">
							<div class="single-blog">
								<div class="blog-img">
									<a href="<?=base_url('landing/detail_buku/').$bk['id'] ?>">
										<img style="height: 230px; object-fit: cover" src="<?=base_url('assets/data/upload/').$bk['thumbnail'] ?>" alt="">
									</a>
								</div>
								<h4><a href="<?=base_url('landing/detail_buku/').$bk['id'] ?>"><?=$bk['judul'] ?></a></h4>
								<p>Penulis : <?=$bk['penulis'] ?></p>
								<div class="blog-meta">
									<span class="blog-meta-author"><a href="<?=base_url('landing/kategori/').$bk['id_kategori'] ?>"><?=$bk['kategori'] ?></a></span>
									<div class="pull-right">
										<span><?php 
										date_default_timezone_set('Asia/Jakarta');
										echo date('d F Y', $bk['date_created']); ?></span>
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

			