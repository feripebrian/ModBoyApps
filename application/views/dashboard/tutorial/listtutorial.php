<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="card">
		<?php if ($this->session->flashdata('success')) { ?>
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4> <i class="icon fa fa-check"></i> Success!</h4>
				<?php echo $this->session->flashdata('success'); ?>
			</div>
		<?php } elseif ($this->session->flashdata('failed')) { ?>
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4> <i class="icon fa fa-check"></i> failed!</h4>
				<?php echo $this->session->flashdata('failed'); ?>
			</div>
		<?php } ?>
		<div class="card-header">
			<h3 class="card-title">List Game</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID Post</th>
						<th>Id Kategori</th>
						<th>Kategori</th>
						<th>Judul</th>
						<th>Upload</th>
						<th>Update</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($tutorial as $row) { ?>
						<tr>
							<td><?php echo $row['id_post'] ?></td>
							<td><?php echo $row['kategori'] ?></td>
							<td>
								<?php foreach ($kategori as $kat) {
									if ($kat['id'] == $row['kategori']) {
										echo $kat['kategori'];
									}
								} ?>
							</td>
							<td><?php echo $row['judul'] ?></td>
							<td><?php echo $row['date_upload'] ?></td>
							<td><?php echo $row['date_update'] ?></td>
							<td>
								<?php
								$answer = $row['status'];
								if ($answer == "1") {
									echo 'Aktif';
								} else {
									echo 'Tidak Aktif';
								}
								?>
							</td>
							<td>
								<div class="btn-group">
									<?php echo anchor('dashboard/game/addgames/' . $row['id_post'], '<ion-icon name="eye"></ion-icon>', 'type="button" class="btn btn-info btn-sm"'); ?>
									<?php echo anchor('dashboard/game/editgames/game_edit/' . $row['id_post'], '<ion-icon name="create"></ion-icon>', 'type="button" class="btn btn-success btn-sm"'); ?>
									<?php echo anchor('dashboard/game/listgames/game_hapus/' . $row['id_post'], '<ion-icon name="trash"></ion-icon>', 'type="button" class="btn btn-danger btn-sm"'); ?>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<th>ID Post</th>
						<th>Id Kategori</th>
						<th>Kategori</th>
						<th>Judul</th>
						<th>Upload</th>
						<th>Update</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->


</div>
<!-- /.content-wrapper -->
