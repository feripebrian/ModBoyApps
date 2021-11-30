<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<div class="col-md-12 ab-sec">
					<div class="col-md-12" style="padding: 10px 10px;">
						<?php foreach ($emulator as $sh) {
							$id = $sh['id_kategori'] ?>
							<div class="col-md-12" style="padding: 10px 10px;">
								<div class="col-md-12">
									<h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"><?php echo $sh['judul'] ?></h1>
								</div>
							</div>
							<?php echo $sh['deskripsi'] ?>
							<?php echo anchor($sh['link'], 'Download', 'class="btn btn-info" style="padding: 10px 100px;" target="_blank"') ?>
						<?php } ?>

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

<section id="service">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<?php foreach ($kategori_emu as $r) {
					if ($id == $r['id_kategori']) {
						echo "
				    	<div class=\"col-xs-12 col-md-12\" style=\"border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;\">
							<h3 style=\"border-bottom: 2px solid #999999;\">" . $r['kategori'] . " </h3>
							<div class=\"features-sec\">";
						if ($id == $r['id_kategori']) {
							$array = array('id_kategori' => $id, 'kategori' => 7, 'status' => 1);
							$this->db->from('post');
							$this->db->like($array);
							$data = $this->db->get()->result_array();
							foreach ($data as $j) {
								echo "
        									<div class=\"col-md-6 col-sm-6 col-xs-12 wow fadeInUp\">
        										<div class=\"media service-box\">
        											<div class=\"pull-left\"> 
														<img style=\"height: 64px;width: 64px;\" src=" . $j['gambar'] . " class=\"img-circle img-responsive\" alt=" . $j['judul'] . "> 
													</div>
        											<div class=\"media-body\">
        												" . anchor('rom/' . $j['id_kategori'] . '/' . $j['uri'], '<h4>' . $j['judul'] . '</h4>', '') . "
        											</div>
        										</div>
        									</div>";
							}
						}
						echo "
							</div>
						</div>";
					}
				} ?>

				<div class="col-xs-12 col-md-12" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<h3 style="border-bottom: 2px solid #999999;">Tutorial </h3>
					<div class="features-sec">
						<?php foreach ($tutorial as $tutor) { ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
								<div class="media service-box">
									<div class="pull-left"> <img style="max-height: 64px;" src="<?php echo $tutor['gambar'] ?>" class="img-circle img-responsive" alt="<?php echo $tutor['judul'] ?>"> </div>
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
															<a data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $row_kategori_emu['id_kategori'] ?>emu">
																<h4><?php echo $row_kategori_emu['kategori'] ?></h4>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<div class="modal fade bs-example-modal-lg<?php echo $row_kategori_emu['id_kategori'] ?>emu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<div class="features-sec">
														<div class="row">
															<?php
															$id = $row_kategori_emu['id_kategori'];
															$array = array('id_kategori' => $id, 'kategori' => 5, 'status' => 1);
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
																			<h4><?php echo anchor('emulator/' . $j['id_kategori'] . '/' . $j['uri'], $j['judul'], '') ?></h4>
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
