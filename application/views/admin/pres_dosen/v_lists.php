<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<a href="<?= base_url('pres_dosen/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
		</div>
		<div class="panel-body">
			<?php

			if ($this->session->flashdata('pesan')) {
				echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
				echo $this->session->flashdata('pesan');
				echo '</div>';
			}

			?>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Kelompok</th>
						<th>Juara - Lomba</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($pres_dosen as $key => $value) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $value->nama ?></td>
							<td><?= $value->juara ?></td>
							<td>
								<a href="<?= base_url('pres_dosen/edit/' . $value->id_prestasi) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
								<a href="<?= base_url('pres_dosen/delete/' . $value->id_prestasi) ?>" onclick="return confirm('Apakah Data Ini Akan Dihapus..?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>