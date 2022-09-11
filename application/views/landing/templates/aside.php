<div class="col-md-4 sidebar ftco-animate">
	<div class="sidebar-box ftco-animate">
		<div class="categories">
			<h3>Categories</h3>
			<li><a href="<?=base_url('landing/koleksi/')?>">Semua<span></span></a></li>
			<?php foreach ($kategori as $kg): ?>
				<li><a href="<?=base_url('landing/kategori/').$kg['id'] ?>"><?=$kg['kategori'] ?><span></span></a></li>
			<?php endforeach ?>
		</div>
	</div>

	<div class="sidebar-box ftco-animate">
		<h3>Buku Terbaru</h3>
		<?php foreach ($recent as $rc): ?>
			<div class="block-21 mb-4 d-flex">
				<a class="blog-img mr-4" style="background-image: url('<?=base_url('assets/data/upload/').$rc['thumbnail'] ?>');"></a>
				<div class="text">
					<h3 class="heading"><a href="<?=base_url('landing/detail_buku/').$rc['id'] ?>"><?=$rc['judul'] ?></a></h3>
					<div class="meta">
						<div><a href="#"><span class="icon-calendar"></span> <?php 
						date_default_timezone_set('Asia/Jakarta');
						echo date('d F Y', $rc['date_created']); ?></a></div>
					</div>
				</div>
			</div>
		<?php endforeach ?>

	</div>
</div>
</div>
</div>
</section> <!-- .section -->