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
				$arr = array();
				foreach ($game as $row) {
					array_push($arr, $row['judul']);
				}
				foreach ($arr as $s) {
					if ($s[0] == $c) {
						echo '
					<div class="col-md-4">' . $s . '</div>
					';
					}
				} ?>
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
						<?php foreach ($gamesearch as $search) { ?>
							<tr>
								<td><?php echo $search['judul'] ?></td>
								<td><?php echo $search['versi'] ?></td>
								<td><a class="btn btn-info" style="padding: 10px;" href="#">View</a> <a class="btn btn-success" style="padding: 10px;" href="#">Download</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
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
					<a class="btn btn-info" style="padding: 10px 100px;" href="views_apps">Lihat Apps</a>
				</div>
			</div>
		</div>
	</div>
</section>
