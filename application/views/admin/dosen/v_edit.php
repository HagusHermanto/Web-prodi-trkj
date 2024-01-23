<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit Data dosen
		</div>
		<div class="panel-body">
			<?php

			echo validation_errors('<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
			}


			echo form_open_multipart('dosen/edit/' . $dosen->id_dosen);
			?>

			<div class="form-group">
				<label>NIDN</label>
				<input class="form-control" value="<?= $dosen->nidn ?>" type="text" name="nidn" placeholder="NIDN" required>
			</div>

			<div class="form-group">
				<label>Nama dosen</label>
				<input class="form-control" value="<?= $dosen->nama_dosen ?>" type="text" name="nama_dosen" placeholder="Nama dosen" required>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input class="form-control" value="<?= $dosen->tempat_lahir ?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input class="form-control" value="<?= $dosen->tgl_lahir ?>" type="text" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label>Pendidikan</label>
					<select name="pendidikan" class="form-control">
						<option value="<?= $dosen->pendidikan ?>"><?= $dosen->pendidikan ?></option>
						<option value="D3">D3</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<img src="<?= base_url('foto_dosen/' . $dosen->foto_dosen) ?>" width="150px">
			</div>

			<div class="form-group">
				<label>Ganti Foto</label>
				<input type="file" class="form-control" type="text" name="foto_dosen">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-success">Reset</button>
			</div>


			<?php echo form_close(); ?>
		</div>
	</div>