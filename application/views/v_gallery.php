<section class="upcoming-meetings" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading">
					<h2>Gallery</h2>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<?php foreach ($gallery as $key => $value) { ?>
						<div class="col-lg-4">
							<div class="meeting-item">
								<div class="thumb">
									<div class="about_item_image"><img src="<?= base_url('sampul/' . $value->sampul) ?>" width="250px" height="250px"></div>
								</div>
								<div class="down-content">
									<h4 class="course_title"><a href="<?= base_url('home/detail_gallery/' . $value->id_gallery) ?>"><?= $value->nama_gallery ?></a></h4>
									<p>Jumlah : <?= $value->jml_foto ?> Foto</p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	