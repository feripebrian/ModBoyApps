<!--Features-Section-Start-->
<section id="blog">
	<div class="container">
		<div class="col-md-12 ">
			<div class="heading">
				<h2>APK</h2>
				<div class="line"></div>
			</div>
		</div>
		<div class="col-md-12 ">
			<!-- Large modal -->
			<?php for ($c = 'A', $j = 1; $j <= 26; $j++) {
				echo 	'
					<button style="margin: 1px;" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg' . $c . '">' . $c . '</button>
					<div class="modal fade bs-example-modal-lg' . $c . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-body">
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
								<img src="<?php echo $asd['gambar'] ?>" style="width: 75px; height: 75px;" alt="img-responsive" class="img-circle img-responsive">
							</div>
							<div class="media-body">
								<h5><?php echo anchor('view/' . $asd['url'], $asd['judul'], '') ?></h5>
								<p><?php echo  $asd['versi'] ?></p>

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
					';
				$c++;
			} ?>
			<input class="form-control" id="myInput" type="text" placeholder="Search Game..">
			<br>
			<div class="col-md-12" style="height: 500px; overflow-y: scroll;">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Nama Game</th>
							<th>Versi</th>
							<th></th>
						</tr>
					</thead>
					<tbody id="myTable">
						<?php foreach ($appsearch as $search) { ?>
							<tr>
								<td><?php echo $search['judul'] ?></td>
								<td><?php echo $search['versi'] ?></td>
								<td>
									<?php echo anchor('view/' . $search['url'], 'View', 'class="btn btn-info" style="padding: 10px;"') ?>
									<?php echo anchor($search['link'], 'Download', ' class="btn btn-success" style="padding: 10px;" target="_blank"') ?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
</section>

<!--About-Sec-2-Start-->
<div class="bg-sec">
	<div class="container">

	</div>
</div>



<!--Blog-Section-Start-->
<section id="features">
	<div class="container">
		<div class="col-md-12 ">
			<div class="heading">
				<h2>Game</h2>
				<div class="line"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php foreach ($game as $g) { ?>
					<div class="col-md-3 blog-sec" style="padding-bottom: 10px;">
						<div class="blog-info"> <img src="<?php echo $g['gambar'] ?>" class="img-responsive" alt="">
							<?php echo anchor('view/' . $g['url'], '<h5>' . $g['judul'] . '</h5>', '') ?>
							<p><?php echo $g['deskripsi_singkat'] ?></p>
							<div class="heading">
								<?php echo anchor($g['link'], 'Download', 'class="btn btn-danger" style="padding: 10px 100px;"') ?>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
		<div class="col-md-12 ">
			<div class="container">
				<div class="heading" style="padding-top: 40px;">
					<a class="btn btn-info" style="padding: 10px 100px;" href="game">Lihat Game</a>
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
									<div class="pull-center"> <img style="max-height: 64px;" src="<?php echo $row_kategori['gambar'] ?>"> </div>
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
																$query = $this->db->get_where('post', array('kategori' => $k, 'id_kategori' => $id));
																$data = $query->result_array();

																foreach ($data as $j) {
																?>
																	<div class="col-md-6 col-sm-6 col-xs-6">
																		<div class="media service-box" style="margin: 5px 0px;">
																			<div class="pull-left">
																				<img src="<?php echo $j['gambar'] ?>" style="width: 75px; height: 75px;" alt="img-responsive" class="img-circle img-responsive">
																			</div>
																			<div class="media-body">
																				<h5><?php echo anchor('view/' . $j['url'], $j['judul'], '') ?></h5>
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
