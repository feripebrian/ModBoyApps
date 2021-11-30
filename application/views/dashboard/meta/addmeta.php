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
			<h3 class="card-title">Add Meta</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php echo form_open('dashboard/meta/addmeta/meta_add/', 'class="form-horizontal"') ?>
		<form>
			<div class="card-body">
				<div class="form-group row">
					<label for="inputtitle" class="col-sm-2 col-form-label">Title</label>
					<div class="col-sm-10">
						<?php echo form_input('title', '', 'type="text" class="form-control" id="inputtitle" placeholder="Title"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputkeyword" class="col-sm-2 col-form-label">Keyword</label>
					<div class="col-sm-10">
						<?php echo form_input('keyword', '', 'type="text" class="form-control" id="inputkeyword" placeholder="Keyword"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
						<?php echo form_textarea('deskripsi_singkat', '', 'class="form-control" onkeyup="count_up(this);" id="inputdeskripsisingkat" placeholder="Deskripsi Singkat Max 160 Karakter" maxlength="160"') ?>
						Jumlah Karakter <span class="text-muted pull-right" id="count1"> 0</span>
					</div>
				</div>

			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<?php echo form_submit('submit', 'Submit', 'class="btn btn-info"') ?>
			</div>
			<!-- /.card-footer -->
		</form>
		<?php echo form_close() ?>
	</div>


</div>
<!-- /.content-wrapper -->
