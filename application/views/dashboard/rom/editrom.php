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
			<h3 class="card-title">Edit Emulator</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<?php foreach ($rom_edit as $row) { ?>
			<?php echo form_open('dashboard/rom/editrom/rom_update/' . $row['id_post'], 'class="form-horizontal"') ?>
			<div class="card-body">
				<div class="form-group row">
					<label for="inputtitle" class="col-sm-2 col-form-label">Title</label>
					<div class="col-sm-10">
						<?php echo form_input('title', $row['title'], 'class="form-control" id="inputtitle" class="form-control" placeholder="Title Max 70 Karakter" maxlength="70"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputkeyword" class="col-sm-2 col-form-label">Keyword</label>
					<div class="col-sm-10">
						<?php echo form_input('keyword', $row['keyword'], 'class="form-control" id="inputkeyword" placeholder="Keyword"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputdescription" class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
						<?php echo form_textarea('deskripsi_singkat', $row['deskripsi_singkat'], 'class="form-control" onkeyup="count_up(this);" id="inputdescription" placeholder="Description Max 160 Karakter" maxlength="160"') ?>
						Jumlah Karakter <span class="text-muted pull-right" id="count1"> 0</span>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kategori Game</label>
					<div class="col-sm-10">
						<div class="form-group">
							<?php
							foreach ($kategori_emulator as $ro) {
								$options[$ro['id_kategori']] = $ro['kategori'];
							};
							echo form_dropdown('id_kategori', $options, $row['id_kategori'], 'class="custom-select"');
							?>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputjudul" class="col-sm-2 col-form-label">Judul Emulator</label>
					<div class="col-sm-10">
						<?php echo form_input('judul', $row['judul'], 'class="form-control" id="inputjudul" class="form-control" placeholder="Judul Emulator"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Deskripsi</label>
					<div class="col-sm-10">
						<?php echo form_textarea('deskripsi', $row['deskripsi'], 'class="form-control" id="editor-ckeditor" placeholder="Deskripsi"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputuri" class="col-sm-2 col-form-label">URL</label>
					<div class="col-sm-10">
						<?php echo form_input('uri', $row['uri'], 'class="form-control" id="inputuri" placeholder="URL"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputlink" class="col-sm-2 col-form-label">Link Download</label>
					<div class="col-sm-10">
						<?php echo form_input('link', $row['link'], 'class="form-control" id="inputlink" placeholder="Link Download"') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputbintang" class="col-sm-2 col-form-label">Bintang</label>
					<div class="col-sm-10">
						<?php
						$options = array(
							'1' => '1',
							'2' => '2',
							'3' => '3',
							'4' => '4',
							'5' => '5',
						);
						echo form_dropdown('bintang', $options, $row['bintang'], 'class="custom-select"');
						?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputgambar" class="col-sm-2 col-form-label">Gambar</label>
					<div class="col-sm-10">
						<?php echo form_input('gambar', $row['gambar'], 'class="form-control" id="gambar" placeholder="Gambar"') ?>
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
							''  => 'Pilih',
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
				<?php echo anchor('dashboard/rom/listrom', 'Cancel', 'class="btn btn-default float-right"') ?>
			</div>
			<!-- /.card-footer -->
			<?php echo form_close() ?>
		<?php } ?>
	</div>


</div>
<!-- /.content-wrapper -->
