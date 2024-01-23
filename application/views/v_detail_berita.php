<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading text-center">
					<h2>Berita</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="meeting-single-item">
						<div class="thumb">
							<div class="price">
								<span><?= $berita->nama_user ?></span>
							</div>
							<div class="date">
								<h6><?= $berita->tgl_berita ?><span></span></h6>
							</div>
							<div class="blog_image"><img src="<?= base_url('gambar_berita/' . $berita->gambar_berita) ?>" height="500px" width="100%"></div>
						</div>
						<div class="down-content">
							<div class="blog_title"><?= $berita->judul_berita ?></div><br>
							<p><?= $berita->isi_berita ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="main-button-red">
						<a href="<?= base_url('home/berita') ?>">Kembali Ke Berita</a>
					</div>
				</div>
			</div>
		</div>

		<section class="our-courses" id="courses">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2>Latest News</h2>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="owl-courses-item owl-carousel">
							<?php foreach ($latest_berita as $key => $value) { ?>
								<div class="item">
									<div class="latest_image">
										<div><img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" alt=""></div>
									</div>
									<div class="down-content">
										<div class="latest_title text-center"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= substr(strip_tags($value->isi_berita), 0, 50) ?>..</a></div>
										<div class="info">
											<div class="row">
												<div class="col-8">
													<ul>
														<div class="latest_price"><?= $value->tgl_berita ?></div>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>

				</div>
			</div>
		</section>

	