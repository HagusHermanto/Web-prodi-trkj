<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit Data Prestasi
		</div>
		<div class="panel-body">
			<?php
			echo form_open_multipart('pres_mhs/edit/' . $pres_mhs->id_prestasi);
			?>

			<div class="form-group">
				<label>Nama Kelompok</label>
				<textarea class="form-control" name="nama" placeholder="Nama Kelompok" id="floatingTextarea2" style="height: 100px"><?= $pres_mhs->nama ?></textarea>
			</div>

			<div class="form-group">
				<label>Juara - Lomba</label>
				<textarea class="form-control" name="juara" placeholder="Juara - Lomba" id="floatingTextarea2" style="height: 100px"><?= $pres_mhs->juara ?></textarea>
			</div>

			<div class="form-group">
				<img src="<?= base_url('foto_pres/' . $pres_mhs->foto) ?>" width="150px">
			</div>

			<div class="form-group">
				<label>Ganti Foto</label>
				<input type="file" class="form-control" name="foto">
			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-success">Reset</button>
			</div>


			<?php echo form_close(); ?>
		</div>
	</div>