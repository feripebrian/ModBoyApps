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
		<?php foreach ($setting as $row) { ?>
			<?php echo form_open('dashboard/setting/setting/setiing_update/' . $row['id'], 'class="form-horizontal"') ?>
			<form>
				<div class="card-body">
					<div class="form-group row">
						<label for="inputkontak" class="col-sm-2 col-form-label">Email Kontak</label>
						<div class="col-sm-10">
							<?php echo form_input('kontak', $row['kontak'], 'type="text" class="form-control" id="inputkontak" placeholder="Email Kontak"') ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputdisclqimer" class="col-sm-2 col-form-label">Disclqimer</label>
						<div class="col-sm-10">
							<?php echo form_textarea('disclqimer', $row['disclqimer'], 'class="form-control" id="editor-ckeditor" placeholder="Disclqimer"') ?>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputlogo" class="col-sm-2 col-form-label">Logo 96x39</label>
						<div class="col-sm-10">
							<?php echo form_input('logo', $row['logo'], 'class="form-control" id="logo" placeholder="Logo 96x39"') ?>
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl-logo">
								Choose file
							</button>
						</div>
						<div class="modal fade" id="modal-xl-logo">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">File Manager</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<iframe width="100%" height="400" src="<?php echo base_url() ?>filemanager/dialog.php?type=1&amp;field_id=logo'&amp;fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>
					<div class="form-group row">
						<label for="inputicon_32" class="col-sm-2 col-form-label">Icon 32X32</label>
						<div class="col-sm-10">
							<?php echo form_input('icon_32', $row['icon_32'], 'class="form-control" id="icon_32" placeholder="Icon 32X32"') ?>
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl-32">
								Choose file
							</button>
						</div>
						<div class="modal fade" id="modal-xl-32">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">File Manager</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<iframe width="100%" height="400" src="<?php echo base_url() ?>filemanager/dialog.php?type=1&amp;field_id=icon_32'&amp;fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>
					<div class="form-group row">
						<label for="inputicon_128" class="col-sm-2 col-form-label">Icon 128X128</label>
						<div class="col-sm-10">
							<?php echo form_input('icon_128', $row['icon_128'], 'class="form-control" id="icon_128" placeholder="Icon 128X128"') ?>
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl-128">
								Choose file
							</button>
						</div>
						<div class="modal fade" id="modal-xl-128">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">File Manager</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<iframe width="100%" height="400" src="<?php echo base_url() ?>filemanager/dialog.php?type=1&amp;field_id=icon_128'&amp;fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>
					<div class="form-group row">
						<label for="inputicon_192" class="col-sm-2 col-form-label">Icon 192X129</label>
						<div class="col-sm-10">
							<?php echo form_input('icon_192', $row['icon_192'], 'class="form-control" id="icon_192" placeholder="Icon 192X129"') ?>
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl-192">
								Choose file
							</button>
						</div>
						<div class="modal fade" id="modal-xl-192">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">File Manager</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<iframe width="100%" height="400" src="<?php echo base_url() ?>filemanager/dialog.php?type=1&amp;field_id=icon_192'&amp;fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
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
