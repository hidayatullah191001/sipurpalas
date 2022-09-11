    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/') ?>img/hero.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">Perpustakaan Digital SMA Negeri 14 Palembang</h1>
            <p><a href="#koleksibuku" class="btn btn-secondary px-4 py-3">Ayo Mulai</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Fitur Aplikasi</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Koleksi Buku</h3>
                <p>Semua buku bisa dibaca dimana saja.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Koleksi Referensi</h3>
                <p>Terdapat kumpulan referensi untuk memperluas pengetahuan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Koleksi Video Interaktif</h3>
                <p>Dengan video interaktif, semua pelajaran menjadi lebih menarik.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-9 col-xl-7">
            <div class="card shadow-lg border-0" style="border-radius: 15px;">
              <div class="card-body p-5">
                <div class="text-center mb-4 pb-2">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-quotes/bulb.webp"
                  alt="Bulb" width="100">
                </div>

                <?php foreach ($quote as $qt): ?>
                  <figure class="text-center mb-0">
                    <blockquote class="blockquote">
                      <p class="pb-3">
                        <i class="fas fa-quote-left fa-xs text-primary"></i>
                        <span class="lead font-italic"><?=$qt['isi'] ?></span>
                        <i class="fas fa-quote-right fa-xs text-primary"></i>
                      </p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0">
                      <?=$qt['quote_by'] ?>
                    </figcaption>
                  </figure>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-counter bg-light" id="section-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Data Repository</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="<?=$count_buku?>">0</strong>
                    <span>Jumlah Buku</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="<?=$count_referensi?>">0</strong>
                    <span>Jumlah Referensi</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="<?=$count_video?>">0</strong>
                    <span>Jumlah Video Interaktif</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section" id="koleksibuku">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Koleksi Buku Terbaru</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="carousel-testimony owl-carousel">
              <?php foreach ($buku as $bk) : ?>
                <div class="item">
                  <div class="course align-self-stretch">
                    <a href="<?=base_url('landing/detail_buku/').$bk['id'] ?>" class="img" style="background-image: url('<?= base_url('assets/data/upload/') . $bk['thumbnail'] ?>')"></a>
                    <div class="text p-4">
                      <p class="category"><span><?= $bk['kategori'] ?></span></p>
                      <h3 class="mb-3"><a href="#"><?= $bk['judul'] ?></a></h3>
                      <p><?php
                      $kalimat = $bk['catatan'];
                      $max = 20;
                      $cetak = substr($kalimat, 0, $max);
                      if (strlen($kalimat) > $max) {
                        echo $cetak . '...';
                      } else {
                        echo $cetak;
                      } ?></p>
                      <p><a href="<?=base_url('landing/detail_buku/').$bk['id'] ?>" class="btn btn-primary">Lihat detail!</a></p>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><a href="<?=base_url('landing/koleksi') ?>" class="btn btn-primary">Lebih Banyak</a></h2>
          </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-md-10 ftco-animate">
            <p><strong>Peringatan : </strong>buku yang disediakan berasal dari sumber lain. Oleh karena itu tidak diperbolehkan untuk memperjual belikan karena akan ada sanksi sesuai dengan undang - undang yang ada.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Koleksi Referensi Terbaru</h2>
          </div>
        </div>
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
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><a href="<?=base_url('landing/referensi') ?>" class="btn btn-primary">Lebih Banyak</a></h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Koleksi Video Interaktif Terbaru</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="carousel-testimony owl-carousel">
              <?php foreach ($video as $vd) : ?>
                <div class="item">
                  <div class="course align-self-stretch">
                    <iframe style="width: 100%; height: 230px; border: none;" class="card-img-top"src="https://www.youtube.com/embed/<?=$vd['link'] ?>"></iframe>
                    <div class="text p-4">
                      <h3 class="mb-3"><a href="<?=base_url('landing/detail_video/').$vd['id'] ?>"><?= $vd['judul'] ?></a></h3>

                      <p><a href="<?=base_url('landing/detail_video/').$vd['id'] ?>" class="btn btn-primary">Lihat detail!</a></p>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"><a href="<?=base_url('landing/koleksi') ?>" class="btn btn-primary">Lebih Banyak</a></h2>
          </div>
        </div>
      </div>
    </section>
