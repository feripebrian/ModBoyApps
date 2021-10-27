<!DOCTYPE html>
<!--
	Cosmix by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Cosmix Free HTML5 Responsive Template | Template Stock</title>
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/bootstrap.css">
	<!--Stylesheets-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/style.css">
	<!--Responsive-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/responsive.css">
	<!--Animation-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/animate.css">
	<!--Prettyphoto-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/prettyPhoto.css">
	<!--Font-Awesome-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/font-awesome.css">
	<!--Owl-Slider-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/main_page/css/owl.transitions.css">
	<!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/main_page/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>assets/main_page/js/respond.min.js"></script>
  [endif]-->
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
	<!--Preloader-->
	<div id="preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!--Navigation-->
	<header id="menu">
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="navbar-brand" href="#menu"><img src="<?php echo base_url() ?>assets/main_page/images/Logo/01.png" alt=""></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a class="scroll" href="#menu">Home</a></li>
							<li><a class="scroll" href="#features">Game</a></li>
							<li><a class="scroll" href="#blog">Apps</a></li>
							<!-- <li><a class="scroll" href="#service">Service</a></li>
							<li><a class="scroll" href="#features">Features</a></li>
							<li><a class="scroll" href="#portfolio">Portfolio</a></li>
							<li><a class="scroll" href="#pricing">Pricing</a></li>
							<li><a class="scroll" href="#team">Team</a></li>
							<li><a class="scroll" href="#blog">Blog</a></li>
							<li><a class="scroll" href="#contact">Contact</a></li> -->
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</div>
		</div>
	</header>
	<!--Slider-Start-->
	<section id="slider">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active" style="background-image:url(<?php echo base_url() ?>assets/main_page/images/Slider/01.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<h1>We Are Cosmix</h1>
								<h2>Creative Themes</h2>
								<p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple pages also included in this theme with lots of CSS and JQuery animations</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item" style="background-image:url(<?php echo base_url() ?>assets/main_page/images/Slider/02.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<h1>We Are Cosmix</h1>
								<h2>Creative Themes</h2>
								<p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple pages layouts also in this theme with lots of CSS and JQuery animations</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item" style="background-image:url(<?php echo base_url() ?>assets/main_page/images/Slider/03.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<h1>We Are Cosmix</h1>
								<h2>Creative Themes</h2>
								<p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple page also included in this theme with lots of CSS and JQuery animations</p>
							</div>
						</div>
					</div>
				</div>
				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<!--/#home-carousel-->
	</section>
	<!--Features-Section-Start-->
	<section id="features">
		<div class="container">
			<div class="col-md-12 ">
				<div class="heading">
					<h2>Game</h2>
					<div class="line"></div>
				</div>
			</div>
			<div class="col-md-12 ">
				<div class="col-md-12 ">
					<div class="tab-content">
						<?php foreach ($game as $row_game) { ?>
							<div role="tabpanel" class="tab-pane fade in active feat-sec">
								<div class="col-md-3 tab-img"><img src="<?php echo base_url() ?>assets/main_page/images/Features/<?php echo $row_game['gambar'] ?>" class="img-responsive" alt=""></div>
								<div class="col-md-9 tab">
									<a href="">
										<h5> <?php echo $row_game['judul'] ?> </h5>
									</a>
									<div class="line"></div>
									<div class="clearfix"></div>
									<p class="feat-sec"><?php echo $row_game['deskripsi_singkat'] ?></p>
									<div class="heading">
										<a class="btn btn-danger" style="padding: 10px 100px;" href="<?php echo $row_game['link'] ?>">Download</a>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-md-12 ">
				<div class="container">
					<div class="heading" style="padding-top: 40px;">
						<a class="btn btn-info" style="padding: 10px 100px;" target="_blank" href="view/views_game">Lihat Game</a>
					</div>
				</div>
			</div>
	</section>

	<!--About-Sec-2-Start-->
	<div class="bg-sec">
		<div class="container">
			<div class="col-md-10 col-sm-10 col-xs-8">
				<h3>Premium quality free onepage template</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div>
		</div>
	</div>
	<!--Service-Section-Start-->
	<section id="service">
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<div class="heading">
					<h2>Kategori Game</h2>
					<div class="line"></div>
				</div>
			</div>
			<div class="row">
				<div class="features-sec">
					<?php foreach ($kategori as $row_kategori) { ?>
						<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
							<div class="media service-box">
								<div class="pull-left"> <img style="max-height: 64px;" src="<?php echo base_url() ?>assets/main_page/images/icon/arcade.png"> </div>
								<div class="media-body">

									<a href="">
										<h5 class="media-heading" style="line-height: 64px;"><?php echo $row_kategori['kategori'] ?></h5>
									</a>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Arcade</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Racing</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Survival</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Strategy</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Sport</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Simulation</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Role Playing</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Puzzel</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Casual</h5>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
							<div class="media-body">
								<a href="">
									<h5 class="media-heading" style="line-height: 64px;">Musik</h5>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--Testimonials-Section-Start-->
	<section id="testimonials" class="parallex">
		<div class="container">
			<div class="quote"> <i class="fa fa-quote-left"></i> </div>
			<div class="clearfix"></div>
			<div class="slider-text">
				<div id="owl-testi" class="owl-carousel owl-theme">
					<div class="item">
						<div class="col-md-10 col-md-offset-1"> <img src="<?php echo base_url() ?>assets/main_page/images/Testimonials/02.jpg" class="img-circle" alt="">
							<h5>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</h5>
							<h6>EMA JOHNSON</h6>
							<p>Web Developer</p>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1"> <img src="<?php echo base_url() ?>assets/main_page/images/Testimonials/03.jpg" class="img-circle" alt="">
						<h5>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur</h5>
						<h6>SAM DEEN</h6>
						<p>Web Designer</p>
					</div>
					<div class="col-md-10 col-md-offset-1"> <img src="<?php echo base_url() ?>assets/main_page/images/Testimonials/04.jpg" class="img-circle" alt="">
						<h5>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas</h5>
						<h6>JOHN DOE</h6>
						<p>CEO</p>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!--Blog-Section-Start-->
	<section id="blog">
		<div class="container">
			<div class="col-md-12 ">
				<div class="heading">
					<h2>Apps BL<span>OG</span></h2>
					<div class="line"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php foreach ($app as $row_app) { ?>
						<div class="col-md-3 blog-sec" style="padding-bottom: 10px;">
							<div class="blog-info"> <img src="<?php echo base_url() ?>assets/main_page/images/Blog/1.jpg" class="img-responsive" alt="">
								<a href="#">
									<h5><?php echo $row_app['judul'] ?></h5>
								</a>
								<p><?php echo $row_app['deskripsi_singkat'] ?></p>
								<div class="heading">
									<a class="btn btn-danger" style="padding: 10px 100px;" target="_blank" href="<?php echo $row_app['link'] ?>">Download</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-12 ">
				<div class="container">
					<div class="heading" style="padding-top: 40px;">
						<a class="btn btn-info" style="padding: 10px 100px;" target="_blank" href="view/views_apps">Lihat Apps</a>
					</div>
				</div>
			</div>
		</div>
	</section>

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
		<p> &copy; Copyright 2016 Cosmix - Created By : <a href="http://templatestock.co" target="_blank">Template Stock</a> </p>
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
</body>

</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
