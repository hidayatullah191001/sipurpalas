<!-- aside blog -->
			<div id="aside" class="col-md-3">

				<!-- search widget -->
				<div class="widget search-widget">
					<form>
						<input class="input" type="text" name="search">
						<button><i class="fa fa-search"></i></button>
					</form>
				</div>
				<!-- /search widget -->

				<!-- category widget -->
				<div class="widget category-widget">
					<h3>Categories</h3>
					<a class="category" href="<?=base_url('landing/koleksi') ?>">SEMUA</a>
					<?php foreach ($kategori as $kg): ?>
						<a class="category" href="<?=base_url('landing/kategori/').$kg['id'] ?>"><?=$kg['kategori']?></a>
					<?php endforeach ?>
				</div>
				<!-- /category widget -->

				<!-- posts widget -->
				<div class="widget posts-widget">
					<h3>Recents Posts</h3>
					<?php foreach ($recent as $rc): ?>
						<!-- single posts -->
						<div class="single-post">
							<a class="single-post-img" href="<?=base_url('landing/detail_buku/').$rc['id'] ?>">
								<img style="height: 50px; width: 80px; object-fit: cover;" src="<?=base_url('assets/data/upload/').$rc['thumbnail'] ?>" alt="">
							</a>
							<a href="blog-post.html"><?=$rc['judul'] ?></a>
							<p><small><?php 
							date_default_timezone_set('Asia/Jakarta');
							echo date('d F Y', $rc['date_created']); ?></small></p>
						</div>
						<!-- /single posts -->
					<?php endforeach ?>
				</div>
				<!-- /posts widget -->
			</div>
			<!-- /aside blog -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</div>
<!-- /Blog -->