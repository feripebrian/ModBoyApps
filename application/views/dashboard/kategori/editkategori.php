<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="card card-info">
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
			<h3 class="card-title">Edit Kategori Game</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php foreach ($kategori_edit as $row) { ?>
			<?php echo form_open('dashboard/kategori/editkategori/kategori_update/' . $row['id_kategori'], 'class="form-horizontal"') ?>
			<div class="card-body">
				<div class="form-group row">
					<label for="inputkategori" class="col-sm-2 col-form-label">Kategori</label>
					<div class="col-sm-10">
						<?php echo form_input('kategori', $row['kategori'], 'type="text" class="form-control" id="inputkategori" placeholder="Kategori" required') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputgambar" class="col-sm-2 col-form-label">Gambar</label>
					<div class="col-sm-10">
						<?php echo form_upload('gambar', $row['gambar'], 'type="file" class="custom-file-input" id="inputgambar" placeholder="Gambar"') ?>
						<label class="custom-file-label" for="inputgambar">Choose file</label>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputstatus" class="col-sm-2 col-form-label">Ststus</label>
					<div class="col-sm-10">
						<?php
						$options = array(
							''    => 'Pilih',
							'0' => 'Non Aktif',
							'1' => 'Aktif',
						);
						echo form_dropdown('status', $options, $row['status'], 'class="custom-select"');
						?>
					</div>
				</div>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<?php echo form_submit('submit', 'Submit', 'class="btn btn-info"') ?>
				<?php echo anchor('dashboard/kategori/listkategori', 'Cancel', 'class="btn btn-default float-right"') ?>
			</div>
			<!-- /.card-footer -->
			<?php echo form_close() ?>
		<?php } ?>
	</div>
</div>
<!-- /.content-wrapper -->
