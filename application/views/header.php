<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="">


	<title>ModBoyApk | <?php echo $title ?> </title>
	<meta name="description" content="<?php echo $deskripsi ?>" />
	<meta name="keyword" Content="<?php echo $keyword ?>" />


	<link rel="icon" href="<?php echo $icon_32 ?>" type="image/png">
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-212183959-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-212183959-1');
	</script>

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3336455231711980" crossorigin="anonymous"></script>
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
						<a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo $logo ?>" alt="ModBoyapk.com"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a class="scroll" href="#menu">Home</a></li>
							<li><a class="scroll" href="#features">Game</a></li>
							<li><a class="scroll" href="#blog">Apps</a></li>
							<li><?php echo anchor('tutorial', 'Tutorial') ?></li>
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
				<?php foreach ($slide as $row_slide) { ?>
					<div class="item <?php echo $row_slide['slide_pertama'] ?>" style="background-image:url(<?php echo $row_slide['gambar'] ?>)">
						<div class="carousel-caption container">
							<div class="row">
								<div class="col-md-7 col-sm-12 col-xs-12">
									<h1>We Are Cosmix</h1>
									<h2><?php echo $row_slide['judul'] ?></h2>
									<p><?php echo $row_slide['deskripsi'] ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<!--/#home-carousel-->
	</section>
