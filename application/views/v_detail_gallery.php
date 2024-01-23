<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading text-center">
					<h2><?= $nama_gallery->nama_gallery ?></h2>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<?php foreach ($gallery as $key => $value) { ?>
						<div class="col-lg-4 col-lg-4 about_col about_col_left">
							<div class="meeting-item">
								<div class="meeting-single-item">
									<div class="thumb">

										<div class="about_item_image"><img src="<?= base_url('foto/' . $value->foto) ?>" width="350px" height="280px"></div>
									</div>
									<div class="down-content">
										<div class="about_item_title"><a href="#"><?= $value->ket_foto ?></a></div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="main-button-red">
					<a href="<?= base_url('home/gallery') ?>">Kembali Ke Galleri</a>
				</div>
			</div>
		</div>
	