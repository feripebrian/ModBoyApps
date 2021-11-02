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
			<h3 class="card-title">Add Kategori Game</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php echo form_open('dashboard/kategori/addkategori/kategori_add/', 'class="form-horizontal"') ?>
		<form>
			<div class="card-body">
				<div class="form-group row">
					<label for="inputkategori" class="col-sm-2 col-form-label">Kategori</label>
					<div class="col-sm-10">
						<?php echo form_input('kategori', '', 'type="text" class="form-control" id="inputkategori" placeholder="Kategori" required') ?>
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
					<label for="inputstatus" class="col-sm-2 col-form-label">Ststus</label>
					<div class="col-sm-10">
						<?php
						$options = array(
							''	=> 'Pilih',
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
				<?php echo anchor('dashboard/kategori/listkategori', 'Cancel', 'class="btn btn-default float-right"') ?>
			</div>
			<!-- /.card-footer -->
		</form>
		<?php echo form_close() ?>
	</div>


</div>
<!-- /.content-wrapper -->
