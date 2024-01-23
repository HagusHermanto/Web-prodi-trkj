<section class="meetings-page" id="meetings">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12">
						<div class="meeting-single-item">
							<div class="down-content">

								<div class="col-lg-12 text-center">
									<h2>Download Area</h2>
								</div>
								<div class="col-lg-12">

									<table class="table table-bordered" id="myTable">
										<thead>
											<tr>
												<th class="text-center" width="50px">No</th>
												<th class="text-center">Keterangan File</th>
												<th class="text-center" width="100px">Download</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($download as $key => $value) { ?>


												<tr>
													<td class="text-center"><?= $no++ ?></td>
													<td><?= $value->ket_file ?></td>
													<td class="text-center"><a href="<?= base_url('file/' . $value->file); ?>" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download</a></td>
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

	