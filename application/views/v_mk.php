<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12">
						<div class="meeting-single-item">
							<div class="down-content">

								<div class="col-lg-12 text-center">
									<h2>Mata Kuliah</h2>
									<br>
								</div>
								<div class="col-lg-12">

									<table class="table table-bordered" id="myTable">
										<thead>
											<tr>
												<th>No</th>
												<th>Mata Pelajaran</th>
												<th>Kode Mata Pelajaran</th>
												<th>SKS</th>
												<th>Semester</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($download as $key => $value) { ?>
												<tr>
													<td><?= $no++; ?></td>
													<td><?= $value->nama_mk ?></td>
													<td><?= $value->kode_mk ?></td>
													<td><?= $value->sks ?></td>
													<td><?= $value->semester ?></td>
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
