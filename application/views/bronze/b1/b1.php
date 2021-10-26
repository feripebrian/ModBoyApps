<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>blessed</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bronze/b1/css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bronze/b1/css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bronze/b1/css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bronze/b1/css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

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
			document.getElementById("demo").innerHTML = days + " Days " + hours + " Hours " +
				minutes + " Minutes " + seconds + " Seconds ";

			// If the count down is over, write some text 
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("demo").innerHTML = "EXPIRED";
			}
		}, 1000);
	</script>
</head>
<!-- body -->

<body class="main-layout">
	<!-- loader  -->
	<div class="loader_bg">
		<div class="loader"><img src="<?php echo base_url() ?>assets/bronze/b1/images/loading.gif" alt="#" /></div>
	</div>
	<!-- end loader -->
	<!-- header -->
	<header>
		<!-- header inner -->
		<div class="head_top">
			<div class="container">

			</div>
			<!-- end header inner -->
			<!-- end header -->
			<!-- banner -->
			<section class="banner_main">
				<div class="container">
					<div class="row d_flex">
						<div class="col-md-12">
							<div class="text-bg">
								<span> The Wedding Of</span>
								<h1>Alex & Angel</h1>
								<h2>Sabtu, 30 Oktober 2021</h2>

							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</header>
	<!-- end banner -->
	<!-- weare -->
	<div class="weare">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<span>Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.</span>
						<p>(QS. Ar-Rum : 21)</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="row">
						<div class="col-md-6 margin_boo">
							<div class="weare_box ">
								<figure><img src="<?php echo base_url() ?>assets/bronze/b1/images/weare_img1.png" alt="#" /></figure>
								<div class="text_name">
									<p>Alex</p>
								</div>
								Putra dari
								<div class="text_name_ort">
									<p>Bapak</p>
									<p>&</p>
									<P>Ibu</P>
								</div>

							</div>
						</div>
						<div class="col-md-6">
							<div class="weare_box">
								<figure><img src="<?php echo base_url() ?>assets/bronze/b1/images/weare_img2.png" alt="#" /></figure>
								<div class="text_name">
									<p>Angel</p>
								</div>
								Putri dari
								<div class="text_name_ort">
									<p>Bapak</p>
									<p>&</p>
									<P>Ibu</P>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- weare -->
	<!-- Our -->
	<div id="" class="Our">
		<div class="container">

			<div class="row">
				<div class="col-md-6">
					<div class="Our_box">
						<i><img src="<?php echo base_url() ?>assets/bronze/b1/images/plan1.png" alt="#" /></i>
						<h4>Akad Nikah</h4>
						<div class="date_ceremoni">
							<p>Sabtu, 1 Mei 2021</p>
							<p>09.00 WIB – Selesai</p>
						</div>
						<div class="addres_ceremoni">
							<p>Masjid Al – Jihad Makodam Jaya</p>
							<p>JL. Cik Ditiro, Kedaleman, Kec. Cibeber, Kota Cilegon, Provinsi Banten</p>
						</div>
						<a class="read_more" href="#" target="_blank">Get Direction</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="Our_box">
						<i><img src="<?php echo base_url() ?>assets/bronze/b1/images/plan2.png" alt="#" /></i>
						<h4>Resepsi</h4>
						<div class="date_ceremoni">
							<p>Sabtu, 1 Mei 2021</p>
							<p>09.00 WIB – Selesai</p>
						</div>
						<div class="addres_ceremoni">
							<p>Masjid Al – Jihad Makodam Jaya</p>
							<p>JL. Cik Ditiro, Kedaleman, Kec. Cibeber, Kota Cilegon, Provinsi Banten</p>
						</div>
						<a class="read_more" href="#" target="_blank">Get Direction</a>
					</div>
				</div>

			</div>
			<div class="cdc">
				<div class="row">
					<div class="col-md-12">
						<div class="titlepage time">
							<h2>Menuju Hari Bahagia</h2>
						</div>
						<div class="cd_container">
							<div class="cd_wrapper">
								<div id="demo"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Our -->
	<!-- regist -->
	<div id="regist" class="regist">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>Send Wishes</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<form class="main_form">
						<div class="row">
							<div class="col-md-12 ">
								<input class="contactus" placeholder="Ful Name" type="text" name="name">
							</div>
							<div class="col-md-12">
								<textarea class="contactus" placeholder="Message" name="message"></textarea>
							</div>
							<div class="col-sm-12">
								<button class="register">Kirim Pesan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end regist -->
	<!-- testimonial -->
	<div class="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>Ucapan dan Doa</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="scroll">
						<div class="row">

							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="test_box">
									<div class="jons">
										<h4>Jonson Donat</h4>
									</div>
									<div class="jons_txt">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonial -->
	<!--  footer -->
	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="cont">
							<h3> <strong class="multi"> Protokol Kesehatan</strong></h3>
							<p>Demi keamanan dan kenyamanan bersama, para hadirin undangan dihimbau untuk memenuhi beberapa peraturan berikut:</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="Our_box">
							<i><img src="<?php echo base_url() ?>assets/bronze/b1/images/prokes/social-distancing.png" alt="#" /></i>
							<p class="prokes">Menjaga Jarak</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="Our_box">
							<i><img src="<?php echo base_url() ?>assets/bronze/b1/images/prokes/mask-1.png" alt="#" /></i>
							<p class="prokes">Menggunakan Masker</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="Our_box">
							<i><img src="<?php echo base_url() ?>assets/bronze/b1/images/prokes/wash-your-hands.png" alt="#" /></i>
							<p class="prokes">Mencuci Tangan</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="Our_box">
							<i><img src="<?php echo base_url() ?>assets/bronze/b1/images/prokes/thermometer.png" alt="#" /></i>
							<p class="prokes">Cek Suhu Tubuh</p>
						</div>
					</div>

				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free html Templates</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->
	<!-- Javascript files-->
	<script src="<?php echo base_url() ?>assets/bronze/b1/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bronze/b1/js/popper.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bronze/b1/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bronze/b1/js/jquery-3.0.0.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bronze/b1/js/plugin.js"></script>
	<!-- sidebar -->
	<script src="<?php echo base_url() ?>assets/bronze/b1/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bronze/b1/js/custom.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
