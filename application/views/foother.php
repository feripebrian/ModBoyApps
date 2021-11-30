<footer id="footer-down">
	<h2>Follow Us On</h2>
	<ul class="social-icon">
		<?php foreach ($media as $med) { ?>
			<li class="<?php echo $med['nama'] ?> hvr-pulse">
				<a href="<?php echo $med['link'] ?>">
					<i class="fa fa-<?php echo $med['nama'] ?>"></i>
				</a>
			</li>
		<?php } ?>
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
