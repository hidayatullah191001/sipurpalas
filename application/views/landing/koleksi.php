<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/') ?>img/hero.jpg'); background-attachment:fixed;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-8 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('landing') ?>">Home</a></span> <span>Koleksi</span></p>
				<h1 class="mb-3 bread">Koleksi Buku</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="accordion" id="accordionExample">
			<div class="card shadow-lg border-0">
				<div class="card-header bg-primary" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-center text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Mau baca apa hari ini?
						</button>
					</h2>
				</div>

				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<form method="post" action="">
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="key" id="key" placeholder="Masukkan kata kunci.." aria-label="Recipient's username" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br><br>

		<div class="row">
			<div class="col-md-8 ftco-animate">
				<div class="row">
					<?php foreach ($buku as $bk): ?>
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="card h-100 shadow-lg border-0">
								<img style="width: 100%; height: 250px; object-fit: cover" src="<?=base_url('assets/data/upload/').$bk['thumbnail'] ?>" class="card-img-top" alt="...">
								<div class="card-body">
									<div class="text">
										<p class="category"><a href="<?=base_url('landing/kategori/').$bk['id_kategori'] ?>" class="btn btn-warning btn-sm"><?=$bk['kategori'] ?></a></p>
										<h4 class="mb-3"><a href="<?=base_url('landing/detail_buku/').$bk['id'] ?>"><?= $bk['judul'] ?></a></h4>
										<p><?php
										$kalimat = $bk['catatan'];
										$max = 20;
										$cetak = substr($kalimat, 0, $max);
										if (strlen($kalimat) > $max) {
											echo $cetak . '...';
										} else {
											echo $cetak;
										} ?></p>
									</div>
								</div>
								<div class="card-footer p-0 border-0 bg-white mb-3">
									<p><center><a href="<?=base_url('landing/detail_buku/').$bk['id'] ?>" class="btn btn-primary">Lihat detail</a></center></p>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>    
			</div> <!-- .col-md-8 -->

      <?=$this->pagination->create_links(); ?>
			

			