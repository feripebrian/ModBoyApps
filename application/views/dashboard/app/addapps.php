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
			<h3 class="card-title">Add Apps</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php echo form_open('dashboard/app/addapps/app_add/', 'class="form-horizontal"') ?>
		<div class="card-body">
			<div class="form-group row">
				<label for="inputjudul" class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-10">
					<?php echo form_input('judul', '', 'class="form-control" id="inputjudul" placeholder="Judul"') ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputkeyword" class="col-sm-2 col-form-label">Keyword</label>
				<div class="col-sm-10">
					<?php echo form_input('keyword', '', 'class="form-control" id="inputkeyword" placeholder="Keyword"') ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputdeskripsisingkat" class="col-sm-2 col-form-label">Deskripsi Singkat</label>
				<div class="col-sm-10">
					<?php echo form_textarea('deskripsi_singkat', '', 'class="form-control" id="inputdeskripsisingkat" placeholder="Deskripsi Singkat"') ?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi</label>
				<div class="col-sm-10">
					<?php echo form_textarea('deskripsi', '', 'class="form-control" id="editor-ckeditor" placeholder="Deskripsi"') ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputurl" class="col-sm-2 col-form-label">URL</label>
				<div class="col-sm-10">
					<?php echo form_input('uri', '', 'class="form-control" id="inputurl" placeholder="url"') ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputlink" class="col-sm-2 col-form-label">Link</label>
				<div class="col-sm-10">
					<?php echo form_input('link', '', 'class="form-control" id="inputlink" placeholder="Link"') ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputgambar" class="col-sm-2 col-form-label">Gambar</label>
				<div class="col-sm-10">
					<?php echo form_input('gambar', '', 'class="form-control" id="gambar" placeholder="Gambar"') ?>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
						Choose file
					</button>
				</div>
				<div class="modal fade" id="modal-xl">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">File Manager</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<iframe width="100%" height="400" src="<?php echo base_url() ?>filemanager/dialog.php?type=1&amp;field_id=gambar'&amp;fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
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
					echo form_dropdown('status', $options, '', 'class="custom-select"');
					?>
				</div>
			</div>
		</div>
		<!-- /.card-body -->
		<div class="card-footer">
			<?php echo form_submit('submit', 'Submit', 'class="btn btn-info"') ?>
			<?php echo anchor('dashboard/app/listapps', 'Cancel', 'class="btn btn-default float-right"') ?>
		</div>
		<!-- /.card-footer -->
		<?php echo form_close() ?>
	</div>


</div>
<!-- /.content-wrapper -->
