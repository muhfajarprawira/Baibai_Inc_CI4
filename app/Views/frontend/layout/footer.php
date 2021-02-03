<!-- ======= Footer ======= -->
<footer id="footer">
	<div class="footer-top" style="position: relative; min-height: 100%;">
		<div class=" container">
			<div class="row">

				<div class="col-lg-3 col-md-6 footer-info">
					<img style="width: 200px;" src="<?= base_url(); ?>/frontend_temp/assets/img/logobaibai.png">
					<p>
						<br>
						Jl. Prof. Dr. H. Hadari Nawawi<br>
						Kalimantan Barat 78124<br><br>
						<strong>Phone:</strong> +62 1234 5678 9012<br>
						<strong>Email:</strong> office@baibai.tech<br>
					</p>
					<div class="social-links mt-3">
						<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
						<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
						<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
						<!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
						<!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
					</div>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4></h4>
					<ul>
						<li><a href="<?= base_url('about'); ?>">Tentang Kami</a></li>
						<li><a href="#">Persyaratan Layanan</a></li>
						<li><a href="#services">Fitur</a></li>
						<li><a href="#">Kebijakan Privasi</a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
				</div>

				<div class="col-lg-3 col-md-6 footer-newsletter">
					<div class="col-12">
						<h3><b>Download</b></h3>
					</div>
					<div>
						<a class="col-lg-12" href="#"><img src="<?= base_url(); ?>/frontend_temp/assets/img/logo_google_play.png" style="width: 150px;"></a>
					</div>

					<!-- <div>
						<a class="col-6" href="#"><img src="./assets/img/on_the_app_store_badge.png" style="width: 10vw;"></a>
					</div> -->
					<!-- <form action="" method="post">
						<input type="email" name="email"><input type="submit" value="Subscribe">
					</form> -->
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="copyright">
			&copy; 2020 - <?= date('Y'); ?> Copyright <strong><span>BaiBai Inc.</span></strong> All Rights Reserved
		</div>
		<!-- <div class="credits"> -->
		<!-- All the links in the footer should remain intact. -->
		<!-- You can delete the links only if you purchased the pro version. -->
		<!-- Licensing information: https://bootstrapmade.com/license/ -->
		<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
		<!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
		<!-- </div> -->
	</div>

</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- jQuery, owl carousel, slick -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<!-- BOOTRAP JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Vendor JS Files -->
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>/frontend_temp/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url(); ?>/frontend_temp/assets/js/main.js"></script>


<script>
	// Slider team
	$(".row-team").owlCarousel({
		margin: 20,
		loop: true,
		autoplay: true,
		autoplayTimeout: 2000, //2000ms = 2s;
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
</script>

<script>
	// Slider fitur
	$(".row-fitur").owlCarousel({
		margin: 20,
		loop: true,
		autoplay: true,
		autoplayTimeout: 2000, //2000ms = 2s;
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
</script>

<script>
	// Slider fitur
	$(".img-fitur").owlCarousel({
		margin: 20,
		loop: true,
		autoplay: true,
		autoplayTimeout: 2000, //2000ms = 2s;
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
</script>

<!-- <script>
	// Slider fitur
	$(".row-keunggulan").owlCarousel({
		margin: 20,
		loop: true,
		autoplay: true,
		autoplayTimeout: 2000, //2000ms = 2s;
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
</script> -->

</body>

</html>