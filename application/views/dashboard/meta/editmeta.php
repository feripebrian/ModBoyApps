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
			<h3 class="card-title">Edit Meta</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php foreach ($meta_edit as $row) { ?>
			<?php echo form_open('dashboard/meta/editmeta/meta_update/' . $row['id'], 'class="form-horizontal"') ?>
			<form>
				<div class="card-body">
					<div class="form-group row">
						<label for="inputtitle" class="col-sm-2 col-form-label">Title</label>
						<div class="col-sm-10">
							<?php echo form_input('title', $row['title'], 'type="text" class="form-control" id="inputtitle" placeholder="Title"') ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputkeyword" class="col-sm-2 col-form-label">Keyword</label>
						<div class="col-sm-10">
							<?php echo form_input('keyword', $row['keyword'], 'type="text" class="form-control" id="inputkeyword" placeholder="Keyword"') ?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Description</label>
						<div class="col-sm-10">
							<?php echo form_textarea('description', $row['description'], 'class="form-control" placeholder="Description"') ?>
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
		<?php } ?>
	</div>


</div>
<!-- /.content-wrapper -->
