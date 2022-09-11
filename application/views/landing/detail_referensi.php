<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/') ?>img/hero.jpg'); background-attachment:fixed;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-8 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('landing') ?>">Home</a></span> <span>Detail Referensi</span></p>
				<h1 class="mb-3 bread">Detail Referensi</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 mb-5">
				<center>
					<div class="teacher-details">
						<div class="text ftco-animate">
							<h3><?=$referensi['nama'] ?></h3>
							<span class="position"><?php 
							date_default_timezone_set('Asia/Jakarta');
							echo date('d F Y', $referensi['date_created']); ?></span>
							<p><?=$referensi['catatan'] ?></p>
							<br>
							<iframe style="width: 100%; height: 500px; border: none;" class="card-img-top"src="https://www.youtube.com/embed/<?=$video['link'] ?>"></iframe>
						</div>
					</div>
				</center>
			</div>
		</div>
	</div>
</section>