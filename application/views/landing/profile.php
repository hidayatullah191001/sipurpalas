<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?=base_url('assets2/') ?>/img/hero.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1 class="white-text">Profile</h1>
			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->

<!-- About -->
<div id="about" class="section">

	<!-- container -->
	<div class="container">

		<?php foreach ($profile as $pr): ?>
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<?=$pr['isi'] ?>
				</div>
				<div class="col-md-4">
					<div class="about-img">
						<img src="<?=base_url('assets/data/kepsek/').$pr['foto'] ?>" alt="">
						<center>
							<h3><?=$pr['nama'] ?></h3>
							<h5><strong>Kepala Sekolah</strong></h5>
							<br>
							<p><?=$pr['sambutan'] ?></p>
						</center>
					</div>
				</div>
			</div>
			<!-- row -->
		<?php endforeach ?>
	</div>
	<!-- container -->
</div>
<!-- /About -->