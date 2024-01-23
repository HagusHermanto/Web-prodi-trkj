<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit Penelitian Mahasiswa
		</div>
		<div class="panel-body">
			<?php
			echo form_open_multipart('penelitian_mahasiswa/edit/' . $penelitian_mahasiswa->id_penelitian);
			?>

			<div class="form-group">
				<label>Nama Mahasiswa</label>
				<input class="form-control" value="<?= $penelitian_mahasiswa->nama ?>" type="text" name="nama" placeholder="Nama" required>
			</div>

			<div class="form-group">
				<label>Judul</label>
				<textarea name="judul" class="form-control" placeholder="Judul" cols="30" rows="10" required><?= $penelitian_mahasiswa->judul ?></textarea>
			</div>

			<div class="form-group">
				<label>Abstrak</label>
				<textarea name="abstrak" class="form-control" placeholder="Abstrak" cols="30" rows="10" required><?= $penelitian_mahasiswa->abstrak ?></textarea>
			</div>

			<div class="form-group">
				<label>Tahun</label>
				<input class="form-control" value="<?= $penelitian_mahasiswa->tahun ?>" type="text" name="tahun" placeholder="Tahun" required>
			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-success">Reset</button>
			</div>


			<?php echo form_close(); ?>
		</div>
	</div>