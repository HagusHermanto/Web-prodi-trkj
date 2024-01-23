<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12">
						<div class="meeting-single-item">
							<div class="down-content">

								<div class="col-lg-12 text-center">
									<h2>Prestasi Mahasiswa</h2>
									<br>
								</div>
								<div class="col-lg-12">

									<table class="table table-bordered" id="myTable">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Juara - Lomba</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($pres_mhs as $key => $value) { ?>
												<tr>
													<td><?= $no++; ?></td>
													<td><?= $value->nama ?></td>
													<td><?= $value->juara ?></td>
												</tr>

											<?php } ?>
										</tbody>
									</table>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	