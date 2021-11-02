<footer id="footer-down">
	<h2>Follow Us On</h2>
	<ul class="social-icon">
		<li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
		<li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
		<li class="google-plus hvr-pulse"><a href="#"><i class="fa fa-google-plus"></i></a></li>
		<li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
		<li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
		<li class="behance hvr-pulse"><a href="#"><i class="fa fa-behance"></i></a></li>
	</ul>
	<p> &copy; Copyright 2021 Created By : ModBoyApk </p>
</footer>
<!--Jquery-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/jquery.min.js"></script>
<!--Boostrap-Jquery-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/bootstrap.js"></script>
<!--Preetyphoto-Jquery-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/jquery.prettyPhoto.js"></script>
<!--NiceScroll-Jquery-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/waypoints.min.js"></script>
<!--Isotopes-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/jquery.isotope.js"></script>
<!--Wow-Jquery-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/wow.js"></script>
<!--Count-Jquey-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/jquery.countTo.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/jquery.inview.min.js"></script>
<!--Owl-Crousels-Jqury-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/owl.carousel.js"></script>
<!--Main-Scripts-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/main_page/js/script.js"></script>

<script>
	$(document).ready(function() {
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
</script>
</body>

</html>
