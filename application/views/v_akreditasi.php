<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading text-center">
					<h2>Sertifikat Akreditasi</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php foreach ($akreditasi as $key => $value) { ?>
						<div class="meeting-single-item">
							<div class="thumb">
								<div class="blog_image"><img src="<?= base_url('foto_akreditasi/' . $value->foto_akreditasi) ?>" height="100%" width="50%"></div>
							</div>
							<div class="down-content">
								<h5><?= $value->isi ?></h5>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

	