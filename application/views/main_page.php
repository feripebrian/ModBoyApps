<section id="service">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="col-xs-12 col-md-12" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<h3 style="border-bottom: 2px solid #999999;">Sony Playstation </h3>
					<div class="features-sec">
						<?php foreach ($psx as $psx) { ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
								<div class="media service-box">
									<div class="pull-left">
										<img style="height: 64px;width: 64px;" src="<?php echo $psx['gambar'] ?>" class="img-circle img-responsive" alt="<?php echo $psx['judul'] ?>">
									</div>
									<div class="media-body">
										<?php echo anchor('rom/' . $psx['id_kategori'] . '/' . $psx['uri'], '<h4>' . $psx['judul'] . '</h4>', ''); ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-12" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<h3 style="border-bottom: 2px solid #999999;">Sony Playstation 2 </h3>
					<div class="features-sec">
						<?php foreach ($ps2 as $ps2) { ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
								<div class="media service-box">
									<div class="pull-left">
										<img style="height: 64px;width: 64px;" src="<?php echo $ps2['gambar'] ?>" class="img-circle img-responsive" alt="<?php echo $ps2['judul'] ?>">
									</div>
									<div class="media-body">
										<?php echo anchor('rom/' . $ps2['id_kategori'] . '/' . $ps2['uri'], '<h4>' . $ps2['judul'] . '</h4>', ''); ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-12" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<h3 style="border-bottom: 2px solid #999999;">Sony Playstation Portable </h3>
					<div class="features-sec">
						<?php foreach ($psp as $psp) { ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
								<div class="media service-box">
									<div class="pull-left"> <img style="height: 64px;width: 64px;" src="<?php echo $psp['gambar'] ?>" class="img-circle img-responsive" alt="<?php echo $psp['judul'] ?>"> </div>
									<div class="media-body">
										<?php echo anchor('rom/' . $psp['id_kategori'] . '/' . $psp['uri'], '<h4>' . $psp['judul'] . '</h4>', ''); ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-12" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<h3 style="border-bottom: 2px solid #999999;">Game Android</h3>
					<div class="features-sec">
						<?php foreach ($game as $gm) { ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
								<div class="media service-box">
									<div class="pull-left">
										<img style="height: 64px;width: 64px;" src="<?php echo $gm['gambar'] ?>" class="img-circle img-responsive" alt="<?php echo $gm['judul'] ?>">
									</div>
									<div class="media-body">
										<?php echo anchor('game/' . $gm['kategori'] . '/' . $gm['uri'], '<h4>' . $gm['judul'] . '</h4>', ''); ?>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
				<div class="col-xs-12 col-md-12" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<h3 style="border-bottom: 2px solid #999999;">Apps</h3>
					<div class="features-sec">
						<?php foreach ($apk as $ap) { ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
								<div class="media service-box">
									<div class="pull-left">
										<img style="height: 64px;width: 64px;" src="<?php echo $ap['gambar'] ?>" class="img-circle img-responsive" alt="<?php echo $ap['judul'] ?>">
									</div>
									<div class="media-body">
										<?php echo anchor('apk/' . $ap['kategori'] . '/' . $ap['uri'], '<h4>' . $ap['judul'] . '</h4>', ''); ?>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
				<div class="col-xs-12 col-md-12" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<h3 style="border-bottom: 2px solid #999999;">Tutorial </h3>
					<div class="features-sec">
						<?php foreach ($tutorial as $tutor) { ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
								<div class="media service-box">
									<div class="pull-left">
										<img style="height: 64px;width: 64px;" src="<?php echo $tutor['gambar'] ?>" class="img-circle img-responsive" alt="<?php echo $tutor['judul'] ?>">
									</div>
									<div class="media-body">
										<?php echo anchor('tutorial/' . $tutor['uri'], '<h4>' . $tutor['judul'] . '</h4>', ''); ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>

			</div>
			<div class="col-xs-12 col-md-4">
				<div class="row" id="fun-facts" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<div class="col-md-6">
						<h3 style="border-bottom: 2px solid #999999;">Kategori ROM</h3>
						<div class="pull-center">
							<ul class="list-unstyled">
								<?php foreach ($rom_kat as $kat_rom) { ?>
									<li>
										<div class="features-sec">
											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
													<div class="media service-box" style="margin: 5px 0px;">
														<div class="pull-left">
															<img src="<?php echo $kat_rom['gambar'] ?>" style="width: 40px; height: 40px;" alt="<?php echo $kat_rom['kategori'] ?>" class="img-circle img-responsive">
														</div>
														<div class="media-body">
															<?php echo anchor('rom/' . $kat_rom['id_kategori'], '<h4>' . $kat_rom['kategori'] . '</h4>', '') ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class=" col-md-6">
						<h3 style="border-bottom: 2px solid #999999;">Kategori Emulator</h3>
						<div class="pull-center">
							<ul class="list-unstyled">
								<?php foreach ($kategori_emu as $row_kategori_emu) { ?>
									<li>
										<div class="features-sec">
											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
													<div class="media service-box" style="margin: 5px 0px;">
														<div class="pull-left">
															<img src="<?php echo $row_kategori_emu['gambar'] ?>" style="width: 40px; height: 40px;" alt="<?php echo $row_kategori_emu['kategori'] ?>" class="img-circle img-responsive">
														</div>
														<div class="media-body">
															<?php echo anchor('emulator/' . $row_kategori_emu['id_kategori'], '<h4>' . $row_kategori_emu['kategori'] . '</h4>', '') ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!--Features-Section-Start-->


<!--About-Sec-2-Start-->
<div class="bg-sec">
	<div class="container">
	</div>
</div>
