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
			<h3 class="card-title">List Emulator Kategori</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Kategori</th>
						<th>Kategori</th>
						<th>Status</th>
						<th>Upload</th>
						<th>Update</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;
					foreach ($emulator_kategori as $row) { ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $row['id_kategori'] ?></td>
							<td><?php echo $row['kategori'] ?></td>
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
							<td><?php echo $row['date_upload'] ?></td>
							<td><?php echo $row['date_update'] ?></td>
							<td>
								<div class="btn-group">
									<?php echo anchor('dashboard/emulator_kategori/Editemulatorkategori/emulator_kategori_edit/' . $row['id_kategori'], '<ion-icon name="create"></ion-icon>', 'type="button" class="btn btn-success btn-sm"'); ?>
									<?php echo anchor('dashboard/emulator_kategori/listemulatorkategori/emulator_kategori_hapus/' . $row['id_kategori'], '<ion-icon name="trash"></ion-icon>', 'type="button" class="btn btn-danger btn-sm"'); ?>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<th>No</th>
						<th>ID Kategori</th>
						<th>Kategori</th>
						<th>Status</th>
						<th>Upload</th>
						<th>Update</th>
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
