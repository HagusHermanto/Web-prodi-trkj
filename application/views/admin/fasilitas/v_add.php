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


			echo form_open_multipart('fasilitas/add');
			?>

			<div class="form-group">
				<label>Nama Fasilitas</label>
				<input class="form-control" type="text" name="nama" placeholder="Nama Fasilitas" required>
			</div>

			<div class="form-group">
				<label>Keterangan</label>
				<input class="form-control" type="text" name="keterangan" placeholder="Keterangan" required>
			</div>

			<div class="form-group">
				<label>Foto Fasilitas</label>
				<input type="file" class="form-control" type="text" name="foto_fasilitas" required>
			</div>
		</div>

		<div class="form-group text-center">
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="reset" class="btn btn-success">Reset</button>
		</div>


		<?php echo form_close(); ?>
	</div>
</div>