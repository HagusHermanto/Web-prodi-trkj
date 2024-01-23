<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li class="sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
				<!-- /input-group -->
			</li>
			<li>
				<a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
			</li>

			<li>
				<a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
			</li>

			<li>
				<a href="#"><i class="fa fa-files-o fa-fw"></i> Tentang Kami<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">

					<li>
						<a href="<?= base_url('sejarah') ?>"><i class="fa fa-file fa-fw"></i> sejarah</a>
					</li>

					<li>
						<a href="<?= base_url('visi') ?>"><i class="fa fa-file fa-fw"></i> Visi Misi</a>
					</li>

					<li>
						<a href="<?= base_url('akreditasi') ?>"><i class="fa fa-file fa-fw"></i> Sertifikat Akreditasi</a>
					</li>

					<li>
						<a href="<?= base_url('dosen') ?>"><i class="fa fa-users"></i> Dosen</a>
					</li>

					<li>
						<a href="<?= base_url('mk') ?>"><i class="fa fa-table"></i> Mata Kuliah</a>
					</li>

					<li>
						<a href="<?= base_url('mahasiswa') ?>"><i class="fa fa-mortar-board"></i> Mahasiswa</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-files-o fa-table"></i> Aktifitas<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="<?= base_url('pengumuman') ?>"><i class="fa fa-file fa-fw"></i> Pengumuman</a>
					</li>

					<li>
						<a href="<?= base_url('pres_dosen') ?>"><i class="fa fa-book fa-fw"></i> Prestasi Dosen</a>
					</li>

					<li>
						<a href="<?= base_url('pres_mhs') ?>"><i class="fa fa-file fa-fw"></i> Prestasi Mahasiswa</a>
					</li>

					<li>
						<a href="<?= base_url('penelitian_dosen') ?>"><i class="fa fa-file fa-fw"></i> Penelitian Dosen</a>
					</li>

					<li>
						<a href="<?= base_url('penelitian_mahasiswa') ?>"><i class="fa fa-file fa-fw"></i> Penelitian Mahasiswa</a>
					</li>

				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-wrench fa-fw"></i> Laboratorium<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">

					<li>
						<a href="<?= base_url('jaringan') ?>"><i class="fa fa-file fa-fw"></i> Jaringan Komputer</a>
					</li>
					<li>
						<a href="<?= base_url('komputasi') ?>"><i class="fa fa-file fa-fw"></i> Komputasi</a>
					</li>
					<li>
						<a href="<?= base_url('multimedia') ?>"><i class="fa fa-file fa-fw"></i> Multimedia</a>
					</li>
					<li>
						<a href="<?= base_url('embeded') ?>"><i class="fa fa-file fa-fw"></i> Embeded System</a>
					</li>

				</ul>
				<!-- /.nav-second-level -->
			</li>

			<li>
				<a href="<?= base_url('fasilitas') ?>"><i class="fa fa-download fa-fw"></i> Fasilitas</a>
			</li>

			<li>
				<a href="<?= base_url('download') ?>"><i class="fa fa-download fa-fw"></i> Download</a>
			</li>

			<li>
				<a href="<?= base_url('gallery') ?>"><i class="fa fa-image fa-fw"></i> Gallery</a>
			</li>

			<li>
				<a href="<?= base_url('kontak') ?>"><i class="fa fa-image fa-fw"></i> Kontak</a>
			</li>
			<li>
				<a href="<?= base_url('mitra') ?>"><i class="fa fa-image fa-fw"></i> Mitra</a>
			</li>
			<li>
				<a href="<?= base_url('kaprodi') ?>"><i class="fa fa-user fa-fw"></i> Kaprodi</a>
			</li>

			<li>
				<a href="<?= base_url('admin/setting') ?>"><i class="fa fa-gear fa-fw"></i> Setting</a>
			</li>


			<li class="active">
				<a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
			</li>
		</ul>
	</div>
	<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header"></h2>