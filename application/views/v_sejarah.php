<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading text-center">
					<h2>Sejarah</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php foreach ($sejarah as $key => $value) { ?>
						<div class="meeting-single-item">
							<div class="thumb">
								<div class="blog_image"><img src="<?= base_url('foto_sejarah/' . $value->foto_sejarah) ?>" height="100%" width="100%"></div>
							</div>
							<div class="down-content">
								<div class="blog_title text-center"><?= $value->judul_sejarah ?></div><br>
								<p><?= $value->isi_sejarah ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
