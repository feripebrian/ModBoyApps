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
			<h3 class="card-title">Edit Social Media</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php foreach ($media_edit as $row) { ?>
			<?php echo form_open('dashboard/socialmedia/editmedia/media_update/' . $row['id'], 'class="form-horizontal"') ?>
			<form>
				<div class="card-body">
					<div class="form-group row">
						<label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<?php echo form_input('nama', $row['nama'], 'type="text" class="form-control" id="inputNama" placeholder="Nama"') ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputLink" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<?php echo form_input('link', $row['link'], 'type="text" class="form-control" id="inputLink" placeholder="Link"') ?>
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
					<?php echo anchor('dashboard/socialmedia/listmedia', 'Cancel', 'class="btn btn-default float-right"') ?>
				</div>
				<!-- /.card-footer -->
			</form>
			<?php echo form_close() ?>
		<?php } ?>
	</div>


</div>
<!-- /.content-wrapper -->
