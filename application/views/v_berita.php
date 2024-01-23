<section class="upcoming-meetings" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading">
					<h2>Berita</h2>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<?php foreach ($berita as $key => $value) { ?>
						<div class="col-lg-4">
							<div class="meeting-item">
								<div class="thumb">
									<div class="price">
										<span><?= $value->tgl_berita ?></span>
									</div>
									<div class="date">
										<h6><?= $value->nama_user ?><span></span></h6>
									</div>
									<div class=""><img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" height="170px" width="100%"></div>
								</div>
								<div class="down-content">
									<h4 class="course_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 25) ?>...</a></h4>
									<p><?= substr(strip_tags($value->isi_berita), 0, 100) ?>..</p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	
