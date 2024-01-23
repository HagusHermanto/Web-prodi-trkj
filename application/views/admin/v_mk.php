<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add</button>
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
						<th>Mata Pelajaran</th>
						<th>Kode Mata Pelajaran</th>
						<th>SKS</th>
						<th>Semester</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($mk as $key => $value) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $value->nama_mk ?></td>
							<td><?= $value->kode_mk ?></td>
							<td><?= $value->sks ?></td>
							<td><?= $value->semester ?></td>
							<td>
								<button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_mk ?>"><i class="fa fa-pencil"></i> Edit</button>
								<a href="<?= base_url('mk/delete/' . $value->id_mk) ?>" onclick="return confirm('Apakah Data Ini Akan Dihapus..?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>

			</table>

		</div>
	</div>
</div>





<!-- Modal Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add Mata Kuliah</h4>
			</div>
			<div class="modal-body">
				<?php echo form_open('mk/add'); ?>
				<div class="form-group">
					<label>Mata Kuliah</label>
					<input class="form-control" type="text" name="nama_mk" placeholder="Mata Kuliah" required>
				</div>
				<div class="form-group">
					<label>Kode Mata Kuliah</label>
					<input class="form-control" type="text" name="kode_mk" placeholder="Kode Mata Kuliah" required>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>SKS</label>
							<select name="sks" class="form-control" required>
								<option value="">--Pilih--</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Semester</label>
							<select name="semester" class="form-control" required>
								<option value="">--Pilih--</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
							</select>
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<?php echo form_close(); ?>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Modal edit -->
<?php foreach ($mk as $key => $value) { ?>
	<div class="modal fade" id="edit<?= $value->id_mk ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Edit Mata Kuliah</h4>
				</div>
				<div class="modal-body">
					<?php echo form_open('mk/edit/' . $value->id_mk); ?>
					<div class="form-group">
						<label>Mata Kuliah</label>
						<input class="form-control" type="text" name="nama_mk" value="<?= $value->nama_mk ?>" placeholder="Mata Kuliah" required>
					</div>
					<div class="form-group">
						<label>Kode Mata Kuliah</label>
						<input class="form-control" type="text" name="kode_mk" value="<?= $value->kode_mk ?>" placeholder="Kode Mata Kuliah" required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>SKS</label>
								<select name="sks" class="form-control" required>
									<option value="">--Pilih--</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Semester</label>
								<select name="semester" class="form-control" required>
									<option value="">--Pilih--</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
								</select>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php echo form_close(); ?>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>