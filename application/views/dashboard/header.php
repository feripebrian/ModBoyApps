<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/lte3/plugins/fontawesome-free/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/lte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/lte3/dist/css/adminlte.min.css">
	<!-- Ionicons? -->
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/lte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/lte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/lte3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/lte3/dist/css/adminlte.min.css">

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__wobble" src="<?php echo base_url() ?>assets/lte3/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
				<li class="nav-item">
					<?php echo anchor('log/login/logout', '<ion-icon name="log-out"></ion-icon>', 'class="nav-link" role="button"') ?>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="<?php echo base_url() ?>assets/lte3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">ModaBoyApps</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="info">
						<a href="#" id="zz" class="d-block"><?php $name = $this->session->userdata('nama');
															echo $name; ?></a>
					</div>
				</div>


				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-header">
							MENU
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<ion-icon name="game-controller"></ion-icon>
								<p>
									KATEGORI GAME
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('dashboard/kategori/listkategori', '<ion-icon name="list-circle"></ion-icon> <p>List Kategori</p>', 'class="nav-link"') ?>
								</li>

								<li class="nav-item">
									<?php echo anchor('dashboard/kategori/addkategori', '<ion-icon name="add-circle"></ion-icon> <p>Add Kategori</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<ion-icon name="game-controller"></ion-icon>
								<p>
									GAME
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('dashboard/game/listgames', '<ion-icon name="list-circle"></ion-icon><p>List Game</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('dashboard/game/addgames', '<ion-icon name="add-circle"></ion-icon><p>Add Game</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<ion-icon name="logo-android"></ion-icon>
								<p>APPS<i class="right fas fa-angle-left"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('dashboard/app/listapps', '<ion-icon name="list-circle"></ion-icon><p>List App</p>', 'class="nav-link"') ?>
								</li>

								<li class="nav-item">
									<?php echo anchor('dashboard/app/addapps', '<ion-icon name="add-circle"></ion-icon><p>Add App</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<ion-icon name="list-circle"></ion-icon>
								<p>
									SLIDE
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<?php echo anchor('dashboard/slide/listslide', '<ion-icon name="list-circle"></ion-icon><p>List Slide</p>', 'class="nav-link"') ?>
								</li>
								<li class="nav-item">
									<?php echo anchor('dashboard/slide/addslide', '<ion-icon name="add-circle"></ion-icon><p>Add Slide</p>', 'class="nav-link"') ?>
								</li>
							</ul>
						</li>


						<li class="nav-header">LABELS</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p class="text">Important</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-warning"></i>
								<p>Warning</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-info"></i>
								<p>Informational</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
