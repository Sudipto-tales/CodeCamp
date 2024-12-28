
<script data-cfasync="false"
		src="<?= $base_url ?>../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="<?= $base_url ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?= $base_url ?>assets/js/plugins.js"></script>
	<script src="<?= $base_url ?>assets/js/Popper.js"></script>
	<script src="<?= $base_url ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= $base_url ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= $base_url ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= $base_url ?>assets/js/scrollax.js"></script>
	<script src="<?= $base_url ?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= $base_url ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= $base_url ?>assets/js/isotope.pkgd.min.js"></script>
	<script src="<?= $base_url ?>assets/js/swiper.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk"></script>
	<script src="<?= $base_url ?>assets/js/jquery.easypiechart.min.js"></script>
	<script src="<?= $base_url ?>assets/js/delighters.js"></script>
	<script src="<?= $base_url ?>assets/js/typed.js"></script>
	<script src="<?= $base_url ?>assets/js/jquery.parallax.js"></script>
	<script src="<?= $base_url ?>assets/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?= $base_url ?>assets/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?= $base_url ?>assets/js/extensions/revolution.extension.video.min.js"></script>
	<script src="<?= $base_url ?>assets/js/skrollr.min.js"></script>
	<script src="<?= $base_url ?>assets/js/shuffle-letters.js"></script>
	<script src="<?= $base_url ?>assets/js/main.js"></script>
	<script>
		// Setup End Date for Countdown (getTime == Time in Milleseconds)
		let launchDate = new Date("10 january,2025 12:00:00").getTime();

		// Setup Timer to tick every 1 second
		let timer = setInterval(tick, 1000);

		function tick() {
			// Get current time
			let now = new Date().getTime();
			// Get the difference in time to get time left until reaches 0
			let t = launchDate - now;

			// Check if time is above 0
			if (t > 0) {
				// Setup Days, hours, seconds and minutes
				// Algorithm to calculate days...
				let days = Math.floor(t / (1000 * 60 * 60 * 24));
				// prefix any number below 10 with a "0" E.g. 1 = 01
				if (days < 10) { days = "0" + days; }

				// Algorithm to calculate hours
				let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				if (hours < 10) { hours = "0" + hours; }

				// Algorithm to calculate minutes
				let mins = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
				if (mins < 10) { mins = "0" + mins; }

				// Algorithm to calc seconds
				let secs = Math.floor((t % (1000 * 60)) / 1000);
				if (secs < 10) { secs = "0" + secs; }

				// Create Time String
				let time = `${days} : ${hours} : ${mins} : ${secs}`;

				// Set time on document
				document.querySelector('.countdown').innerText = time;
			}
		}
	</script>
	<script>
		function modal_show() {
			$('#modal_show').modal('show')
		}
		$(document).ready(function () {
			$('.modal_show').on('click', function () {
				var dataNAME = $(this).attr('data-name');
				document.getElementById("modal_title").innerHTML = dataNAME;
				modal_show();
			});
		});
	</script>

	<div class="modal fade" id="modal_show" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
		role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal_title"></h5>
					<a class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-dismiss="modal" href="#"></a>
				</div>
				<div class="modal-body" id="modal_body">
					<iframe title="Actvity System" name="_innerpage2" frameborder="0"
						style="overflow:hidden;height:100%;width:100%;min-height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
