<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?=base_url('assets2/') ?>/img/hero.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1 class="white-text">Referensi</h1>
				<h4 class="white-text">Kumpulan referensi untuk memperluas pengetahuan.</h4>
			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->

<style type="text/css">
	.a:hover{
		color : #FF6700;
	}
</style>
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
					<?php if (count($referensi) == 0): ?>
					<div class="alert alert-danger">Data referensi tidak ditemukan!</div>
					<?php else : ?>
						<?php foreach ($referensi as $rf): ?>
						<!-- single blog -->
						<div class="col-md-6">
							<div class="single-blog">
								<h4><a target="_blank" class="a" href="<?=base_url('landing/detail_referensi/').$rf['id'] ?>"><?=$rf['nama'] ?></a></h4>
								<p><?php
								$kalimat = $rf['catatan'];
								$max = 70 ;
								$cetak = substr($kalimat, 0, $max);
								if (strlen($kalimat)>$max) {
									echo $cetak.'...';
								}else{
									echo $cetak;
								}?></p>
								<div class="blog-meta">
									<span class="blog-meta-author"><a target="_blank" style="color: white" href="<?=$rf['link']?>" class="btn btn-sm btn-primary" >Menuju referensi</a></span>
									<div class="pull-right">
										<span><?php 
										date_default_timezone_set('Asia/Jakarta');
										echo date('d F Y', $rf['date_created']); ?></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /single blog -->
					<?php endforeach ?>
					<?php endif ?>
					
				</div>
				<!-- /row -->
			</div>
			<!-- /main blog -->

			