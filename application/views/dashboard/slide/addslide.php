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
			<h3 class="card-title">Add Slide</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php echo form_open('dashboard/slide/addslide/slide_add/', 'class="form-horizontal"') ?>
		<form>
			<div class="card-body">
				<div class="form-group row">
					<label for="inputslidepertama" class="col-sm-2 col-form-label">Slide Awal</label>
					<div class="col-sm-10">
						<?php
						$options = array(
							''    			=> 'Pilih',
							'non_active' 	=> 'Non Active',
							'active' 		=> 'Active',
						);
						echo form_dropdown('slide_pertama', $options, '', 'class="custom-select"');
						?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
					<div class="col-sm-10">
						<?php echo form_input('judul', '', 'type="text" class="form-control" id="inputJudul" placeholder="Judul" required') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputdeskripsi" class="col-sm-2 col-form-label">deskripsi</label>
					<div class="col-sm-10">
						<?php echo form_textarea('deskripsi', '', 'class="form-control" id="inputdeskripsi" placeholder="Deskripsi"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputgambar" class="col-sm-2 col-form-label">Gambar</label>
					<div class="col-sm-10">
						<?php echo form_upload('gambar', '', 'type="file" class="custom-file-input" id="inputgambar" placeholder="Gambar"') ?>
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
						echo form_dropdown('status', $options, '', 'class="custom-select"');
						?>
					</div>
				</div>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<?php echo form_submit('submit', 'Submit', 'class="btn btn-info"') ?>
				<?php echo anchor('dashboard/slide/listslide', 'Cancel', 'class="btn btn-default float-right"') ?>
			</div>
			<!-- /.card-footer -->
		</form>
		<?php echo form_close() ?>
	</div>


</div>
<!-- /.content-wrapper -->
