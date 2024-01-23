<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit Visi Misi
			<div class="panel-body">
				<?php

				if (isset($error_upload)) {
					echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
				}

				echo validation_errors('<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

				echo form_open_multipart('visi/edit/' . $visi->id_visi);
				?>


				<div class="form-group">
					<label>Judul Visi Misi</label>
					<input class="form-control" value="<?= $visi->judul ?>" type="text" name="judul" placeholder="Judul Visi Misi" required>
				</div>

				<div class="form-group">
					<label>Isi Visi Misi</label>
					<textarea name="isi" id="editor" required><?= $visi->isi ?></textarea>
				</div>


				<div class="form-group">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-success">Reset</button>
				</div>


				<?php echo form_close(); ?>
			</div>
		</div>