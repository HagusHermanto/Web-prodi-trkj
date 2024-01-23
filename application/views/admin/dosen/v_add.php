<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Add Data
		</div>
		<div class="panel-body">
			<?php

			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
			}


			echo form_open_multipart('dosen/add');
			?>

			<div class="form-group">
				<label>NIDN</label>
				<input class="form-control" type="text" name="nidn" placeholder="NIDN" required>
			</div>

			<div class="form-group">
				<label>Nama Dosen</label>
				<input class="form-control" type="text" name="nama_dosen" placeholder="Nama Dosen" required>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input class="form-control" type="text" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label>Pendidikan</label>
					<select name="pendidikan" class="form-control">
						<option value="">--Pilih Pendidikan--</option>
						<option value="D4">D4</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label>Foto Dosen</label>
					<input type="file" class="form-control" type="text" name="foto_dosen" required>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-success">Reset</button>
			</div>


			<?php echo form_close(); ?>
		</div>
	</div>