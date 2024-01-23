</div>
	</div>
	<div class="footer">

	<section class="meetings-page" id="meetings">
		<div class="container">
			<div class="row" style="text-align: start;">
				<div class="col-sm-4">
					<div class="card">
					<div class="card-body">
						<h6 class="card-title">ALAMAT&nbsp;:</h6>
						Jl. Raya Kedungwaru No.10
						<h6 class="card-title mt-2">EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </h6>
						TRKJ@gpibikmubin.or.id
						<h6 class="card-title mt-2">PHONE&nbsp;&nbsp; :</h6>
						+62 8973 7737
					</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
					<div class="card-body">
						<h6 class="card-title">SOCIAL MEDIA :</h6>
						<a href="">
						<i class="fa-brands fa-facebook" style="color: #033da0;"></i>&nbsp;Facebook
						</a><br>
						<a href="">
						<i class="fa-brands fa-instagram" style="color: #9b0363;"></i>&nbsp; Instagram
						</a><br>
						<a href="">
						<i class="fa-brands fa-youtube" style="color: #bd001c;"></i>&nbsp;Youtube
						</a><br>
						<a href="">
						<i class="fa-brands fa-tiktok" style="color: #030303;"></i>&nbsp; Tiktok
						</a><br>
						<a href="">
						<i class="fa-brands fa-github" style="color: #000000;"></i>&nbsp; Github
						</a><br>
						<a href="">
						<i class="fa-brands fa-discord" style="color: #02358d;"></i>&nbsp;Discord
						</a><br>
					</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
					<div class="card-body">
						<h6 class="card-title">Special title treatment</h6>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<p class="mt-5">
			&copy <script>
				document.write(new Date().getFullYear())
			</script> Sarjana Terapan Teknologi Rekayasa Komputer Jaringan
		</p>
		<p>Created by:<a href="https://www.instagram.com/hagushermanto/"> H Hermanto</a></p>
	</div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></script>

<script src="<?= base_url() ?>template/tema-trkj/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url() ?>template/tema-trkj/assets/js/isotope.min.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/assets/js/owl-carousel.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/assets/js/lightbox.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/assets/js/tabs.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/assets/js/video.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/assets/js/slick-slider.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/assets/js/custom.js"></script>


<!-- DataTables JavaScript -->
<script src="<?= base_url() ?>template/tema-trkj/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/js/dataTables/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>template/tema-trkj/js/dataTables/dataTables.responsive.js"></script>
<script>
	//according to loftblog tut
	$('.nav li:first').addClass('active');

	var showSection = function showSection(section, isAnimate) {
		var
			direction = section.replace(/#/, ''),
			reqSection = $('.section').filter('[data-section="' + direction + '"]'),
			reqSectionPos = reqSection.offset().top - 0;

		if (isAnimate) {
			$('body, html').animate({
					scrollTop: reqSectionPos
				},
				800);
		} else {
			$('body, html').scrollTop(reqSectionPos);
		}

	};

	var checkSection = function checkSection() {
		$('.section').each(function() {
			var
				$this = $(this),
				topEdge = $this.offset().top - 80,
				bottomEdge = topEdge + $this.height(),
				wScroll = $(window).scrollTop();
			if (topEdge < wScroll && bottomEdge > wScroll) {
				var
					currentId = $this.data('section'),
					reqLink = $('a').filter('[href*=\\#' + currentId + ']');
				reqLink.closest('li').addClass('active').
				siblings().removeClass('active');
			}
		});
	};

	$('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
		e.preventDefault();
		showSection($(this).attr('href'), true);
	});

	$(window).scroll(function() {
		checkSection();
	});
</script>
</body>

</body>

</html>
