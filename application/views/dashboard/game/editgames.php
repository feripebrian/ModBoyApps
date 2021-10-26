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
			<h3 class="card-title">Edit Game</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php foreach ($game_edit as $row) { ?>
			<?php echo form_open('dashboard/game/editgames/game_update/' . $row['id_post'], 'class="form-horizontal"') ?>
			<div class="card-body">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kategori Game</label>
					<div class="col-sm-10">
						<?php
						foreach ($kategori_game as $sd) {
							$options[$sd['id_kategori']] = $sd['kategori'];
						};

						echo form_dropdown('id_kategori', $options, $row['id_kategori'], 'class="custom-select"');
						?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputjudul" class="col-sm-2 col-form-label">Judul</label>
					<div class="col-sm-10">
						<?php echo form_input('judul', $row['judul'], 'class="form-control" id="inputjudul" placeholder="Judul"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputdeskripsisingkat" class="col-sm-2 col-form-label">Deskripsi Singkat</label>
					<div class="col-sm-10">
						<?php echo form_textarea('deskripsi_singkat', $row['deskripsi_singkat'], 'class="form-control" id="inputdeskripsisingkat" placeholder="Deskripsi Singkat"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputdeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
					<div class="col-sm-10">
						<?php echo form_textarea('deskripsi', $row['deskripsi'], 'class="form-control" id="inputdeskripsi" placeholder="Deskripsi"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputlink" class="col-sm-2 col-form-label">Link</label>
					<div class="col-sm-10">
						<?php echo form_input('link', $row['link'], 'class="form-control" id="inputlink" placeholder="Link"') ?>
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
					<label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
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
				<?php echo anchor('dashboard/game/listgames', 'Cancel', 'class="btn btn-default float-right"') ?>
			</div>
			<!-- /.card-footer -->
			<?php echo form_close() ?>
		<?php } ?>
	</div>


</div>
<!-- /.content-wrapper -->
