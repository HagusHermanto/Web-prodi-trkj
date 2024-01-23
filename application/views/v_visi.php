<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading text-center">
					<h2>Visi dan Misi</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php foreach ($visi as $key => $value) { ?>
						<div class="meeting-single-item">
							<div class="down-content">
								<div class="blog_title"><?= $value->judul ?></div><br>
								<p><?= $value->isi ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		