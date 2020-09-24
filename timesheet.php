<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Timesheet - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once("includes/header.php");?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include_once("includes/sidebar.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Timesheet</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Timesheet</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_todaywork"><i class="fa fa-plus"></i> Add Today Work</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Date</th>
											<th>Projects</th>
											<th class="text-center">Assigned Hours</th>
											<th class="text-center">Hours</th>
											<th class="d-none d-sm-table-cell">Description</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													<a href="profile.php">John Doe <span>Web Designer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Office Management</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">7</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													<a href="profile.php">Richard Miles <span>Web Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Project Management</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													<a href="profile.php">John Smith <span>Android Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Video Calling App</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													<a href="profile.php">Mike Litorus <span>IOS Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Hospital Administration</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
													<a href="profile.php">Wilmer Deluna <span>Team Leader</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Office Management</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">7</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-12.jpg"></a>
													<a href="profile.php">Jeffrey Warden <span>Web Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Project Management</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-13.jpg"></a>
													<a href="profile.php">Bernardo Galaviz <span>Web Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Video Calling App</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
													<a href="profile.php">Lesley Grauer <span>Team Leader</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Hospital Administration</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
													<a href="profile.php">Jeffery Lalor <span>Team Leader</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Ware house developement</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">9</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-04.jpg"></a>
													<a href="profile.php">Loren Gatlin <span>Android Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Office Management</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-03.jpg"></a>
													<a href="profile.php">Tarah Shropshire <span>Android Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Project Management</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-08.jpg"></a>
													<a href="profile.php">Catherine Manseau <span>Android Developer</span></a>
												</h2>
											</td>
											<td>8 Mar 2019</td>
											<td>
												<h2>Video Calling App</h2>
											</td>
											<td class="text-center">20</td>
											<td class="text-center">12</td>
											<td class="d-none d-sm-table-cell col-md-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_todaywork"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_workdetail"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Today Work Modal -->
				<?php include_once("includes/modals/timesheet/add_timesheet.php");?>
				<!-- /Add Today Work Modal -->
				
				<!-- Edit Today Work Modal -->
				<?php include_once("includes/modals/timesheet/edit_timesheet.php");?>
				<!-- /Edit Today Work Modal -->
				
				<!-- Delete Today Work Modal -->
				<?php include_once("includes/modals/timesheet/delete_timesheet.php");?>
				<!-- Delete Today Work Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>