<section class="upcoming-meetings" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading">
					<h2>Fasilitas</h2>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<?php foreach ($fasilitas as $key => $value) { ?>
						<div class="col-lg-6">
							<div class="meeting-item">
								<div class="thumb">
									<div class=""><img src="<?= base_url('foto_fasilitas/' . $value->foto_fasilitas) ?>" height="100%" width="100%"></div>
								</div>
								<div class="down-content text-center">
									<h4><?= $value->nama ?></h4><br>
									<p><?= $value->keterangan ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	