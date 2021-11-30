<!--Features-Section-Start-->
<section id="features">
	<div class="container">
		<div class="col-md-12 ">
			<!-- Large modal -->
			<?php for ($c = 'A', $j = 1; $j <= 26; $j++) {
				echo 	'
					<button style="margin: 1px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg' . $c . '">' . $c . '</button>
					<div class="modal fade bs-example-modal-lg' . $c . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<div class="features-sec">
										<div class="row">';
			?>
				<?php
				$query = $this->db->get_where('post', array('kategori' => 2, 'alfabet' => $c, 'status' => 1));
				$data = $query->result_array();
				foreach ($data as $asd) {
				?>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="media service-box" style="margin: 5px 0px;">
							<div class="pull-left">
								<img src="<?php echo $asd['gambar'] ?>" style="width: 75px; height: 75px;" alt="<?php echo $asd['judul'] ?>" class="img-circle img-responsive">
							</div>
							<div class="media-body">
								<h4><?php echo anchor('game/' . $asd['kategori'] . '/' . $asd['uri'], $asd['judul'], '') ?></h4>

							</div>
						</div>
					</div>

				<?php } ?>
			<?php
				echo '				
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					';
				$c++;
			} ?>
		</div>
	</div>
</section>


<section id="service">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<input class="form-control" id="myInput" type="text" placeholder="Search Game..">
				<br>
				<div class="col-md-12" style="height: 500px; overflow-y: scroll;">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th colspan="2">Nama Apps</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="myTable" style="text-align: left;">
							<?php foreach ($appsearch as $search) { ?>
								<tr>
									<td><img src="<?php echo $search['gambar'] ?>" style="max-width: 45px;" alt="<?php echo $search['judul'] ?>" class="img-circle img-responsive"></td>
									<td><?php echo $search['judul'] ?></td>
									<td>
										<?php echo anchor('apk/' . $search['kategori'] . '/' . $search['uri'], '<i class="fa fa-file-o"></i>', 'class="btn btn-info" style="padding: 10px;"') ?>
										<?php echo anchor($search['link'], '<i class="fa fa-download"></i>', ' class="btn btn-success" style="padding: 10px;" target="_blank"') ?>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
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
			<div class="col-xs-12 col-md-10">
				<div class="col-xs-12 col-md-12" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<h3 style="border-bottom: 2px solid #999999;">Game</h3>
					<div class="features-sec">
						<?php foreach ($game as $pos) { ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
								<div class="media service-box">
									<div class="pull-left"> <img style="max-height: 64px;" src="<?php echo $pos['gambar'] ?>" class="img-circle img-responsive" alt="<?php echo $pos['judul'] ?>"> </div>
									<div class="media-body">
										<?php echo anchor('game/' . $pos['kategori'] . '/' . $pos['uri'], '<h4>' . $pos['judul'] . '</h4>', '');	  ?>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-2">
				<div class="row" id="fun-facts" style="border: 0px solid #999;border-radius: 10px;box-shadow: 2px 2px 5px #888888;margin-bottom: 10px;">
					<div class=" col-md-12">
						<h3 style="border-bottom: 2px solid #999999;">Kategori Game</h3>
						<div class="pull-center">
							<ul class="list-unstyled">
								<?php foreach ($kategori as $row_kategori) { ?>
									<li>
										<div class="features-sec">
											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
													<div class="media service-box" style="margin: 5px 0px;">
														<div class="pull-left">
															<img src="<?php echo $row_kategori['gambar'] ?>" style="width: 40px; height: 40px;" alt="<?php echo $row_kategori['kategori'] ?>" class="img-circle img-responsive">
														</div>
														<div class="media-body">
															<a data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $row_kategori['id_kategori'] ?>">
																<h4><?php echo $row_kategori['kategori'] ?></h4>
															</a>
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
																			<h4><?php echo anchor('game/' . $j['kategori'] . '/' . $j['uri'], $j['judul'], '') ?></h4>
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
