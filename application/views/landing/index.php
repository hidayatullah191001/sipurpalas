		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" 
			style="background-image:url('<?=base_url('assets2/')?>img/hero.jpg')"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">Perpustakaan Digital</h1>
							<p class="lead white-text">SMA Negeri 14 Palembang</p>
							<a class="main-button icon-button" href="#koleksi">Ayo Mulai</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<?php foreach ($profile as $pr): ?>

						<div class="col-md-9">
							<div class="section-header">
								<h2>Selamat Datang</h2>
								<p class="lead">Di Aplikasi Perpustakaan Digital SMA Negeri 14 Palembang</p>
								<p><?=$pr['sambutan']?></p>
							</div>
						</div>

						<div class="col-md-3">
							<div class="">
								<img style="width: 100%; float: right;" src="<?=base_url('assets/data/kepsek/').$pr['foto'] ?>" alt="">
								<center>	
									<p><strong><?=$pr['nama'] ?></strong></p>
									<p>Kepala Sekolah</p>
								</center>
							</div>
						</div>
					<?php endforeach ?>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Courses -->
		<div id="koleksi" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Eksplorasi Koleksi</h2>
						<p class="lead">Koleksi buku-buku dari berbagai sumber dan berbagai kategori</p>
					</div>
				</div>
				<!-- /row -->

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">

						<?php foreach ($buku as $bk): ?>
							<!-- single course -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="course">
									<a href="<?=base_url('landing/detail_buku/').$bk['id'] ?>" class="course-img">
										<img style="height: 150px; object-fit: cover" src="<?=base_url('assets/data/upload/').$bk['thumbnail'] ?>" alt="">
										<i class="course-link-icon fa fa-link"></i>
									</a>
									<a class="course-title" href="<?=base_url('landing/detail_buku/').$bk['id'] ?>"><?=$bk['judul'] ?></a>
									<p>Penulis : <?=$bk['penulis'] ?></p>
									<div class="course-details">
										<span class="course-category"><?=$bk['kategori'] ?></span>
										<span class="course-price course-free"><?php 
										date_default_timezone_set('Asia/Jakarta');
										echo date('d F Y', $bk['date_created']); ?></span>
									</div>
								</div>
							</div>
							<!-- /single course -->
						<?php endforeach ?>
					</div>
					<!-- /row -->
				</div>
				<!-- /courses -->
				<div class="row">
					<center>
						<div class="center-btn">
							<a class="main-button icon-button" href="<?=base_url('landing/koleksi') ?>">Lebih Banyak</a>
						</div>
					</center>
				</div>

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->

		<!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Fitur - Fitur</h2>
						<p class="lead">Aplikasi ini memiliki tiga fitur utama.</p>
					</div>

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-book"></i>
							<div class="feature-content">
								<h4>Koleksi Buku</h4>
								<p>Semua buku bisa dibaca dimana saja.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-paper-plane"></i>
							<div class="feature-content">
								<h4>Koleksi Referensi</h4>
								<p>Terdapat kumpulan referensi untuk memperluas pengetahuan.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-play"></i>
							<div class="feature-content">
								<h4>Koleksi Video Interaktif</h4>
								<p>Dengan video interaktif, semua pelajaran menjadi lebih menarik.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->