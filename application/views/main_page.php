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
								<div class="col-md-2 tab-img">
									<img src="<?php echo $row_game['gambar'] ?>" class="img-responsive" alt="<?php echo $row_game['judul'] ?>">
								</div>
								<div class="col-md-8 tab">
									<?php echo anchor('view/' . $row_game['kategori'] . '/' . $row_game['uri'], '<h5>' . $row_game['judul'] . '</h5>', '') ?>
									<div class="line"></div>
									<div class="clearfix"></div>
									<p class="feat-sec"><?php echo $row_game['deskripsi_singkat'] ?></p>
									<div class="heading">
										<a class="btn btn-danger" target="_blank" style="padding: 10px 100px;" href="<?php echo $row_game['link'] ?>">Download</a>
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
					<a class="btn btn-info" style="padding: 10px 100px;" href="game">Lihat Game</a>
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
					<div class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="5ms">
						<div class="col-md-12">
							<div class="media service-box">
								<div class="col-md-5">
									<div class="pull-center">
										<img style="max-height: 64px;" src="<?php echo $row_kategori['gambar'] ?>" alt="<?php echo $row_kategori['kategori'] ?>">
									</div>
								</div>
								<div class="col-md-7">

									<div class="media-body">
										<button type="button" class="btn" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $row_kategori['id_kategori'] ?>"><?php echo $row_kategori['kategori'] ?></button>
										<div class="modal fade bs-example-modal-lg<?php echo $row_kategori['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title">Modal title</h4>
													</div>
													<div class="modal-body">
														<div class="features-sec">
															<div class="row">
																<?php
																$k = 1;
																$id = $row_kategori['id_kategori'];
																$array = array('kategori' => $k, 'id_kategori' => $id, 'status' => $k);
																$this->db->from('post');
																$this->db->like($array);
																$data = $this->db->get()->result_array();
																foreach ($data as $j) {
																?>
																	<div class="col-md-6 col-sm-6 col-xs-6">
																		<div class="media service-box" style="margin: 5px 0px;">
																			<div class="pull-left">
																				<img src="<?php echo $j['gambar'] ?>" style="width: 75px; height: 75px;" alt="<?php echo $j['judul'] ?>" class="img-circle img-responsive">
																			</div>
																			<div class="media-body">
																				<h5><?php echo anchor('view/' . $j['kategori'] . '/' . $j['uri'], $j['judul'], '') ?></h5>
																				<p><?php echo  $j['versi'] ?></p>

																			</div>
																		</div>
																	</div>

																<?php } ?>
															</div>
														</div>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
						<div class="blog-info"> <img src="<?php echo $row_app['gambar'] ?>" class="img-responsive" alt="<?php echo $row_app['judul'] ?>" style="max-height: 100px;max-width: 100px;">
							<?php echo anchor('view/' . $row_app['kategori'] . '/' . $row_app['uri'], '<h5>' . $row_app['judul'] . '</h5>', '') ?>
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
					<a class="btn btn-info" style="padding: 10px 100px;" href="apk">Lihat Apps</a>
				</div>
			</div>
		</div>
	</div>
</section>
