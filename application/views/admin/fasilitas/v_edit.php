<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit Data fasilitas
		</div>
		<div class="panel-body">
			<?php

			echo validation_errors('<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
			}


			echo form_open_multipart('fasilitas/edit/' . $fasilitas->id_fasilitas);
			?>

			<div class="form-group">
				<label>Nama Fasilitas</label>
				<input class="form-control" value="<?= $fasilitas->nama ?>" type="text" name="nama" placeholder="Nama Fasilitas" required>
			</div>

			<div class="form-group">
				<label>keterangan</label>
				<input class="form-control" value="<?= $fasilitas->keterangan ?>" type="text" name="keterangan" placeholder="Nama Keterangan" required>
			</div>

			<div class="form-group">
				<img src="<?= base_url('foto_fasilitas/' . $fasilitas->foto_fasilitas) ?>" width="150px">
			</div>

			<div class="form-group">
				<label>Ganti Foto</label>
				<input type="file" class="form-control" type="text" name="foto_fasilitas">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-success">Reset</button>
			</div>


			<?php echo form_close(); ?>
		</div>
	</div>