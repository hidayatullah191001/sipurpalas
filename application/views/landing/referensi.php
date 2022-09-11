<div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/') ?>img/hero.jpg'); background-attachment:fixed;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-8 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('landing') ?>">Home</a></span> <span>Referensi</span></p>
				<h1 class="mb-3 bread">Koleksi Referensi</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="accordion" id="accordionExample">
			<div class="card shadow-lg border-0">
				<div class="card-header bg-primary" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-center text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Cari referensi
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
			<?php foreach ($referensi as $rf): ?>
				<div class="col-lg-4 mb-sm-4 ftco-animate">
					<div class="staff">
						<div class="d-flex mb-4">
							<div class="info">
								<h3><a href="<?=base_url('landing/detail_referensi/').$rf['id'] ?>"><?=$rf['nama'] ?></a></h3>
								<span class="position"><?php 
								date_default_timezone_set('Asia/Jakarta');
								echo date('d F Y', $rf['date_created']); ?></span>
								<p>
									<a href="<?=$rf['link'] ?>" target="_blank" class="btn btn-sm btn-primary">Buka Referensi</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>

<?=$this->pagination->create_links(); ?>
