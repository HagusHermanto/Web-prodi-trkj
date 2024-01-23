<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
	<video autoplay muted loop id="bg-video">
		<source src="<?= base_url() ?>template/tema-trkj/assets/images/course-video.mp4" type="video/mp4" />
	</video>

	<div class="video-overlay header-text">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="caption">
						<h6>Hello Students</h6>
						<h2>Welcome to TRKJ</h2>
						<p>Let's study at TRKJ, because at TRKJ you will get knowledge of Computer Networks, Programmers, Multimedia and Robotics. And TRKJ students also have the opportunity to study abroad with a student exchange program.</p>
						<div class="main-button-red">
							<div><a href="https://spmb.bunghatta.ac.id/">Ayo Gabung di TRKJ!</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***** Main Banner Area End ***** -->



<div class="row g-0" style="text-align: center; margin-left: 200px;">
    <?php foreach ($kaprodi as $key => $value): ?>
        <div class="col-md-4 mt-3" style="text-align: center; width: 100px; height:150px;">
		<img src="<?= base_url('gambar/kaprodi/' . $value->gambar) ?>" alt="Course One" style="text-align: center;">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-text"><?= $value->isi ?></h5>
                <p class="card-text"><small class="text-muted"><?= $value->nama ?></small></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

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
	</div>
</section>

<section class="apply-now" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2>Prestasi Mahasiswa</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
				<?php
					// Reverse the array to display the latest items first
					$pres_mhs = array_reverse($pres_mhs);

					// Slice the array to get only the first 6 items
					$pres_mhs_slice = array_slice($pres_mhs, 0, 6);

					foreach ($pres_mhs_slice as $key => $value):
					?>
						<div class="col-lg-4">
							<div class="meeting-item">
								<div class="thumb">
									<div class=""><img src="<?= base_url('foto_pres/' . $value->foto) ?>" height="360px" width="5%"></div>
								</div>
								<div class="down-content text-center">
									<h4><?= substr(strip_tags($value->nama), 0, 50) ?></h4><br>
									<h4><?= substr(strip_tags($value->juara), 0, 100) ?></h4><br>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-facts">
    <div class="container">
        <div class="section-heading" style="text-align: center;">
            <h2>Mitra Kami</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    <?php foreach ($mitra as $key => $value): ?>
                        <div class="item">
                            <div class="icon">
                                <img src="<?= base_url('gambar/mitra/' . $value->logo) ?>" alt="">
                            </div>
                        </div>
                        <!-- ... (tambahkan item lain jika diperlukan) ... -->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contact">
	


