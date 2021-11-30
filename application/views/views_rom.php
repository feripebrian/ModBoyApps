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
				$query = $this->db->get_where('post', array('kategori' => 7, 'alfabet' => $c, 'status' => 1));
				$data = $query->result_array();
				foreach ($data as $asd) {
				?>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="media service-box" style="margin: 5px 0px;">
							<div class="pull-left">
								<img src="<?php echo $asd['gambar'] ?>" style="width: 75px; height: 75px;" alt="<?php echo $asd['judul'] ?>" class="img-circle img-responsive">
							</div>
							<div class="media-body">
								<?php echo anchor('rom/' . $asd['id_kategori'] . '/' . $asd['uri'], '<h4>' . $asd['judul'] . '</h4>', '') ?>
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
			<div class="col-xs-12 col-md-8">
				<input class="form-control" id="myInput" type="text" placeholder="Search Game..">
				<br>
				<div class="col-md-12" style="height: 500px; overflow-y: scroll;">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th colspan="2">Nama Game</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="myTable" style="text-align: left;">
							<?php foreach ($rom as $search) { ?>
								<tr>
									<td><img src="<?php echo $search['gambar'] ?>" style="max-width: 45px;" alt="<?php echo $search['judul'] ?>" class="img-circle img-responsive"></td>
									<td><?php echo $search['judul'] ?></td>
									<td>
										<?php echo anchor('rom/' . $search['id_kategori'] . '/' . $search['uri'], '<i class="fa fa-file-o"></i>', 'class="btn btn-info" style="padding: 10px;"') ?>
										<?php echo anchor($search['link'], '<i class="fa fa-download"></i>', ' class="btn btn-success" style="padding: 10px;" target="_blank"') ?>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
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
