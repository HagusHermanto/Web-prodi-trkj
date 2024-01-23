<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12">
						<div class="meeting-single-item">
							<div class="down-content">

								<div class="col-lg-12 text-center">
									<h2>Penelitian Dosen</h2>
									<br>
								</div>
								<div class="col-lg-12">

									<table class="table table-bordered" id="myTable">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Dosen</th>
												<th>Judul Penelitian</th>
												<th>Abstrak</th>
												<th>Tahun</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($penelitian_dosen as $key => $value) { ?>
												<tr>
													<td><?= $no++; ?></td>
													<td><?= $value->nama ?></td>
													<td><?= $value->judul ?></td>
													<td><?= $value->abstrak ?></td>
													<td><?= $value->tahun ?></td>
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

	