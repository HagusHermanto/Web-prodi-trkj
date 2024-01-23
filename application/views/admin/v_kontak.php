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
						<th>Alamat</th>
						<th>Email</th>
						<th>Kontak</th>
						<th>Facebook</th>
						<th>Instagram</th>
						<th>Youtube</th>
						<th>Tiktok</th>
						<th>Github</th>
						<th>Discord</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                <?php $no = 1;
					foreach ($kontak as $key => $value) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $value->alamat ?></td>
							<td><?= $value->email ?></td>
							<td><?= $value->kontak_person ?></td>
							<td><?= $value->facebook ?></td>
							<td><?= $value->instagram ?></td>
							<td><?= $value->youtube ?></td>
							<td><?= $value->tiktok ?></td>
							<td><?= $value->github ?></td>
							<td><?= $value->discord ?></td>
							
							<td>
								<!-- <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_kontak ?>"><i class="fa fa-pencil"></i></button> -->
								<a href="<?= base_url('kontak/delete/' . $value->id_kontak) ?>" onclick="return confirm('Apakah Data Ini Akan Dihapus..?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add Kontak</h4>
			</div>
			<div class="modal-body">
				<?php echo form_open('kontak/add'); ?>

					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
							<label>Alamat</label>
								<input class="form-control" type="text" name="alamat" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="text" name="email" required>
							</div>
						</div>
                    </div>

					<div class="row">
						<div class="col-md-6">
						 <div class="form-group">
							<label>Kontak</label>
							<input class="form-control" type="text" name="kontak_person" required>
						</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Facebook</label>
								<input class="form-control" type="text" name="facebook" required>
							</div>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
                        <label>Instagram</label>
                        <input class="form-control" type="text" name="instagram" required>
                    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
                        <label>Youtube</label>
                        <input class="form-control" type="text" name="youtube" required>
                    </div>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
                        <label>Github</label>
                        <input class="form-control" type="text" name="github" required>
                    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
                        <label>Discord</label>
                        <input class="form-control" type="text" name="discord" required>
                    </div>
					</div>
						<div class="col-md-6">
						<div class="form-group">
                        <label>Tiktok</label>
                        <input class="form-control" type="text" name="tiktok" required>
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
<!-- <?php foreach ($kontak as $key => $value) { ?>
	<div class="modal fade" id="edit<?= $value->id_kontak ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Edit Kontak</h4>
				</div>
				<div class="modal-body">
					<?php echo form_open('kontak/edit/' . $value->id_kontak); ?>

					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
							<label>Alamat</label>
								<input class="form-control" type="text" name="alamat" value="<?= $value->alamat ?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="text" name="email" value="<?= $value->email ?>" required>
							</div>
						</div>
                    </div>

					<div class="row">
						<div class="col-md-6">
						 <div class="form-group">
							<label>Kontak</label>
							<input class="form-control" type="text" name="kontak_person" value="<?= $value->kontak_person ?>" required>
						</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Facebook</label>
								<input class="form-control" type="text" name="facebook" value="<?= $value->facebook ?>" required>
							</div>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
                        <label>Instagram</label>
                        <input class="form-control" type="text" name="instagram" value="<?= $value->instagram ?>" required>
                    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
                        <label>Youtube</label>
                        <input class="form-control" type="text" name="youtube" value="<?= $value->youtube ?>" required>
                    </div>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
                        <label>Github</label>
                        <input class="form-control" type="text" name="github" value="<?= $value->github ?>" required>
                    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
                        <label>Discord</label>
                        <input class="form-control" type="text" name="discord" value="<?= $value->discord ?>" required>
                    </div>
						</div>
                    </div>       

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php echo form_close(); ?>
			</div> -->
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>
