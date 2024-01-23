<section class="upcoming-meetings" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading">
					<h2>Profil Dosen</h2>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<?php foreach ($dosen as $key => $value) { ?>
						<div class="col-lg-4">
							<div class="meeting-item">
								<div class="thumb">
									<div class=""><img src="<?= base_url('foto_dosen/' . $value->foto_dosen) ?>" height="100%" width="100%"></div>
								</div>
								<div class="down-content text-center">
									<h4><?= $value->nidn ?></h4><br>
									<h4><?= $value->nama_dosen ?></h4><br>
									<h4><?= $value->tempat_lahir ?>, <?= $value->tgl_lahir ?></h4><br>
									<h4><?= $value->pendidikan ?></h4>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	