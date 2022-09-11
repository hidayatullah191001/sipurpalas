<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/') ?>img/hero.jpg'); background-attachment:fixed;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-8 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('landing') ?>">Home</a></span> <span>Profile</span></p>
				<h1 class="mb-3 bread">Profile Sekolah</h1>
			</div>
		</div>
	</div>
</div>
<section class="ftco-section">
	<div class="container">
		<?php foreach ($profile as $pr): ?>
			<div class="row d-flex">
				<div class="col-md-3 d-flex ftco-animate">
					<div class="img img-about align-self-stretch text-center">
						<img style="width: 100%" src="<?=base_url('assets/data/kepsek/').$pr['foto'] ?>"><br><br>
						<h6><strong><?=$pr['nama'] ?></strong></h6>
						<p>Kepala Sekolah</p>
					</div>
				</div>
				<div class="col-md-9 pl-md-5 ftco-animate">
					<h2 class="mb-4">Selamat Datang di Sistem Perpustakaan Digital SMA Negeri 14 Palembang</h2>
					<p><?=$pr['sambutan'] ?></p>
				</div>
			</div>
			<br><br>
			<?=$pr['isi'] ?>
		<?php endforeach ?>
	</div>
</section>