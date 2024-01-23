<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading text-center">
					<h2>Laboratorium Jaringan Komputer</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php foreach ($jaringan as $key => $value) { ?>
						<div class="meeting-single-item">
							<div class="thumb">
								<div class="blog_image"><img src="<?= base_url('foto_lab/' . $value->foto_lab) ?>" height="100%" width="50%"></div>
							</div>
							<div class="down-content">
								<h6><?= $value->kata_pengantar ?></h6>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		