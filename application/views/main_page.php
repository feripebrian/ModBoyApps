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
			<div class="tab-content">
				<div class="row">
					<?php foreach ($game as $row_game) { ?>
						<div class="col-md-12">
							<div role="tabpanel" class="tab-pane fade in active feat-sec">
								<div class="col-md-3 tab-img"><img src="<?php echo $row_game['gambar'] ?>" class="img-responsive" alt=""></div>
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
			</div>
		</div>
	</div>
</section>

<!--Testimonials-Section-Start-->
<section id="testimonials" class="parallex">
	<div class="container">
	</div>
</section>

<!--Blog-Section-Start-->
<section id="blog">
	<div class="container">
		<div class="col-md-12 ">
			<div class="heading">
				<h2>APK</h2>
				<div class="line"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php foreach ($app as $row_app) { ?>
					<div class="col-md-3 blog-sec" style="padding-bottom: 10px;">
						<div class="blog-info"> <img src="<?php echo $row_app['gambar'] ?>" class="img-responsive" alt="">
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
