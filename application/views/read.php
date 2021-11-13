<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<div class="col-md-12 ab-sec">
					<div class="col-md-12" style="padding: 10px 10px;">
						<?php foreach ($show as $sh) { ?>
							<div class="col-md-12" style="padding: 10px 10px;">
								<div class="col-md-8">
									<h3 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"><?php echo $sh['judul'] ?></h3>
								</div>
								<div class="col-md-4">
								</div>
							</div>
							<?php echo $sh['deskripsi'] ?>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Testimonials-Section-Start-->
<section id="testimonials" class="parallex">
	<div class="container">
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<div class="col-md-4 ">
					<h3 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Game</h3>
					<div>
						<ul class="list-unstyled" style="overflow-y: scroll;height: 500px;">
							<?php foreach ($gamesearch as $row_game) { ?>
								<li>
									<div class="features-sec">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
												<div class="media service-box" style="margin: 5px 0px;">
													<div class="pull-left">
														<img src="<?php echo $row_game['gambar'] ?>" style="width: 75px; height: 75px;" alt="<?php echo $row_game['judul'] ?>" class="img-circle img-responsive">
													</div>
													<div class="media-body">
														<h5><?php echo anchor('view/' . $row_game['kategori'] . '/' . $row_game['uri'], $row_game['judul'], '') ?></h5>
														<p><?php echo  $row_game['versi'] ?></p>

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
				<div class="col-md-4 ">
					<h3 class="wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="300ms">Kategori</h3>
					<div>
						<ul class="list-unstyled" style="overflow-y: scroll;height: 500px;">
							<?php foreach ($kategori as $row_kategori) { ?>
								<li>
									<div class="features-sec">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
												<div class="media service-box" style="margin: 5px 0px;">
													<div class="pull-left">
														<img src="<?php echo $row_kategori['gambar'] ?>" style="width: 75px; height: 75px;" alt="<?php echo $row_kategori['kategori'] ?>" class="img-circle img-responsive">
													</div>
													<div class="media-body">
														<button type="button" class="btn" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $row_kategori['id_kategori'] ?>">
															<h5>
																<?php echo $row_kategori['kategori'] ?>
															</h5>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
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
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-md-4 ">
					<h3 class="wow fadeInDown" data-wow-duration="3000ms" data-wow-delay="300ms">Apps</h3>
					<div>
						<ul class="list-unstyled" style="overflow-y: scroll;height: 500px;">
							<?php foreach ($app as $row_app) { ?>
								<li>
									<div class="features-sec">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
												<div class="media service-box" style="margin: 5px 0px;">
													<div class="pull-left">
														<img src="<?php echo $row_app['gambar'] ?>" style="width: 75px; height: 75px;" alt="<?php echo $row_app['judul'] ?>" class="img-circle img-responsive">
													</div>
													<div class="media-body">
														<h5><?php echo anchor('view' . $row_app['uri'], $row_app['judul'], '') ?></h5>
														<p><?php echo  $row_app['versi'] ?></p>
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

</section>


<!--About-Sec-2-Start-->
<div class="bg-sec">
	<div class="container">
	</div>
</div>