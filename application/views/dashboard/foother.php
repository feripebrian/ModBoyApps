<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
	<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.1.0
	</div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/lte3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/lte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/lte3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/lte3/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url() ?>assets/lte3/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/lte3/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/lte3/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/lte3/dist/js/pages/dashboard2.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/lte3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/lte3/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace('editor-ckeditor', {
		filebrowserBrowseUrl: '<?php echo base_url(); ?>filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserUploadUrl: '<?php echo base_url(); ?>filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserImageBrowseUrl: '<?php echo base_url(); ?>filemanager/dialog.php?type=1&editor=ckeditor&fldr='
	});
</script>

<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
			"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>

<script>
	function count_up(obj) {
		document.getElementById('count1').innerHTML = obj.value.length;
	}

	function count_down(obj) {
		var element = document.getElementById('count2');

		element.innerHTML = 160 - obj.value.length;

		if (30 - obj.value.length < 0) {
			element.style.color = 'red';

		} else {
			element.style.color = 'grey';
		}
	}
</script>
</body>

</html>
