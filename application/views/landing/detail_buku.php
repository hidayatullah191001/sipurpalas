<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/') ?>img/hero.jpg'); background-attachment:fixed;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-8 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('landing') ?>">Home</a></span> <span>Detail Buku</span></p>
				<h1 class="mb-3 bread">Detail Buku <?=$buku['judul'] ?></h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ftco-animate">
				<div class="card shadow-lg border-0 mb-3" >
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="<?=base_url('assets/data/upload/').$buku['thumbnail'] ?>" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h1><?=$buku['judul'] ?></h1><span class="badge badge-primary">Tanggal upload : <?php 
								date_default_timezone_set('Asia/Jakarta');
								echo date('d F Y', $buku['date_created']); ?></span><br><br>
								<h6>Penulis : <?=$buku['penulis'] ?></h6>
								<?php if ($buku['catatan'] != '') : ?>
									<p><?=$buku['catatan'] ?></p>
								<?php endif ?>
								<?php if ($buku['link'] != '') : ?>
									<br>
									<a target="_blank" class="btn btn-primary" href="<?=$buku['link'] ?>">Menuju Link</a>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>

				<?php $info = pathinfo($buku['file']);?>
				<?php if ($info['extension'] == 'pdf'): ?>
					<embed style="width: 100%;height: 900px " type="application/pdf" src="<?=base_url('assets/data/upload/').$buku['file'] ?>"></embed>
					<?php elseif($info['extension'] == 'pptx' || $info['extension'] == 'ppt' ): ?>
						<a class="btn btn-primary btn-sm" href="<?=base_url('assets/data/upload/').$buku['file'] ?>">Download PPT</a>
					<?php endif ?>
					<br><br>

				</div> <!-- .col-md-8 -->

