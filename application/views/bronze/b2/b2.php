<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuptial &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />



	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/pages/afr_001/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/pages/afr_001/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/pages/afr_001/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/pages/afr_001/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/pages/afr_001/css/magnific-popup.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/pages/afr_001/css/style.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url() ?>assets/pages/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("oct 21, 2022 22:10:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get today's date and time
			var now = new Date().getTime();

			// Find the distance between now and the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Output the result in an element with id="demo"
			document.getElementById("demo").innerHTML = "<span>" + days + "<br> Days</span> " + "<span>" + hours + " <br>Hours</span>" +
				"<span>" + minutes + " <br>Minutes</span> " + "<span>" + seconds + " <br>Seconds </span>";

			// If the count down is over, write some text 
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("demo").innerHTML = "EXPIRED";
			}
		}, 1000);
	</script>

</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<div class="fh5co-hero" data-section="home">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url() ?>assets/pages/afr_001/	images/cover_bg_1.jpg);">
					<div class="display-t">
						<div class="display-tc">
							<div class="container">
								<div class="col-md-10 col-md-offset-1">
									<div class="animate-box">
										<h1>The Wedding</h1>
										<h2>Jack &amp; Rose</h2>
										<p><span>28.12.2017</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<!-- end:header-top -->

			<div id="fh5co-couple" class="fh5co-section-gray">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-12">
							<div class="col-md-12 text-center heading-section">
								<h1>Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.</h1>
								<p><strong>(QS. Ar-Rum : 21)</strong></p>
							</div>
						</div>
					</div>
					<div class="row row-bottom-padded-md animate-box">
						<div class="col-md-6 col-md-offset-3 text-center">
							<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
								<img src="<?php echo base_url() ?>assets/pages/afr_001/images/groom.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
								<h3>Jack Wood</h3>
								<p>Purta Dari </p>
								<h3>Bapak</h3>
								<h3>Ibu</h3>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2 nopadding">
								<h2 class="amp-center"><i class="icon-heart"></i></h2>
							</div>
							<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
								<img src="<?php echo base_url() ?>assets/pages/afr_001/images/bride.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
								<h3>Rose Thomas</h3>
								<p>Purti Dari </p>
								<h3>Bapak</h3>
								<h3>Ibu</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="fh5co-when-where" class="fh5co-section-gray">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-6 text-center animate-box">
							<div class="wedding-events">
								<div class="ceremony-bg" style="background-image: url(<?php echo base_url() ?>assets/pages/afr_001/images/wed-ceremony.jpg);"></div>
								<div class="desc">
									<h3>Akad Nikah</h3>
									<p><strong>Sabtu, 1 Mei 2021, 09.00 WIB – Selesai</strong></p>
									<p>Masjid Al – Jihad Makodam Jaya JL. Cik Ditiro, Kedaleman, Kec. Cibeber, Kota Cilegon, Provinsi Banten</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-center animate-box">
							<div class="wedding-events">
								<div class="ceremony-bg" style="background-image: url(<?php echo base_url() ?>assets/pages/afr_001/images/wed-party.jpg);"></div>
								<div class="desc">
									<h3>Resepsi</h3>
									p><strong>Sabtu, 1 Mei 2021, 09.00 WIB – Selesai</strong></p>
									<p>Masjid Al – Jihad Makodam Jaya JL. Cik Ditiro, Kedaleman, Kec. Cibeber, Kota Cilegon, Provinsi Banten</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="fh5co-countdown">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 style="color: #fff;font-size: 50px;">Menuju Hari Bahagia</h1>
					</div>
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<p class="countdown" id="demo"></p>
					</div>
				</div>
			</div>
			<div id="fh5co-gallery">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup image-popup" href="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-1.jpg"><img src="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-7.jpg"><img src="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-7.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-6.jpg"><img src="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-6.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-2.jpg"><img src="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-5.jpg"><img src="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-5.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-3.jpg"><img src="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-4.jpg"><img src="<?php echo base_url() ?>assets/pages/afr_001/images/gallery-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="fh5co-started" style="background-image:url(<?php echo base_url() ?>assets/pages/afr_001/	images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center heading-section">
							<h2>Send Wishes</h2>
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-inline">
								<div class="col-md-12 col-sm-4">
									<div class="form-group">
										<label for="name" class="sr-only">Name</label>
										<input name="name" type="name" class="form-control" id="name" placeholder="Name">
									</div>
									<div class="form-group">
										<label for="Message" class="sr-only">Message</label>
										<textarea name="message" class="form-control" id="message" placeholder="Message"></textarea>
									</div>
								</div>

								<div class="col-md-4 col-sm-4">
									<button type="submit" class="btn btn-primary btn-block">I am Attending</button>
								</div>
							</form>
						</div>
						<div class="col-md-10 col-md-offset-1">
							<div class="text_box">
								<div class="col-lg-12 col-md-4 col-sm-6">
									<div class="fh5co-blog animate-box">
										<div class="blog-text">
											<div class="prod-title">
												<h4>Nama</h4>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											</div>
										</div>
									</div>
									<div class="fh5co-blog animate-box">
										<div class="blog-text">
											<div class="prod-title">
												<h3>Nama</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											</div>
										</div>
									</div>
									<div class="fh5co-blog animate-box">
										<div class="blog-text">
											<div class="prod-title">
												<h3>Nama</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											</div>
										</div>
									</div>
									<div class="fh5co-blog animate-box">
										<div class="blog-text">
											<div class="prod-title">
												<h3>Nama</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											</div>
										</div>
									</div>
									<div class="fh5co-blog animate-box">
										<div class="blog-text">
											<div class="prod-title">
												<h3>Nama</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											</div>
										</div>
									</div>
									<div class="fh5co-blog animate-box">
										<div class="blog-text">
											<div class="prod-title">
												<h3>Nama</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											</div>
										</div>
									</div>
									<div class="fh5co-blog animate-box">
										<div class="blog-text">
											<div class="prod-title">
												<h3>Nama</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-10 col-md-offset-1">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="btn btn-primary btn-block">
												<p style="text-align: center;">
													GIVE
												</p>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
										<div class="panel-body">
											<div style="text-align: center;">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>

			<footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2>Jack &amp; Rose</h2>
							</div>
							<div class="col-md-6 col-md-offset-3 text-center">
								<p class="fh5co-social-icons">
									<a href="#"><i class="icon-twitter2"></i></a>
									<a href="#"><i class="icon-facebook2"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
									<a href="#"><i class="icon-dribbble2"></i></a>
									<a href="#"><i class="icon-youtube"></i></a>
								</p>
								<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	<audio autoplay loop>
		<!-- <source src="<?php echo base_url() ?>assets/pages/afr_001//musik/Battle_Scars.mp3"> -->
	</audio>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<!-- jQuery -->
	<script src="<?php echo base_url() ?>assets/pages/afr_001/dist/scripts.min.js"></script>

</body>

</html>
