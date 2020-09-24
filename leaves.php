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
        <title>Leaves - HRMS admin template</title>
		
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
								<h3 class="page-title">Leaves</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leaves</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Add Leave</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Leave Statistics -->
					<div class="row">
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Today Presents</h6>
								<h4>12 / 60</h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Planned Leaves</h6>
								<h4>8 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Unplanned Leaves</h6>
								<h4>0 <span>Today</span></h4>
							</div>
						</div>
						<div class="col-md-3">
							<div class="stats-info">
								<h6>Pending Requests</h6>
								<h4>12</h4>
							</div>
						</div>
					</div>
					<!-- /Leave Statistics -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option> -- Select -- </option>
									<option>Casual Leave</option>
									<option>Medical Leave</option>
									<option>Loss of Pay</option>
								</select>
								<label class="focus-label">Leave Type</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option> -- Select -- </option>
									<option> Pending </option>
									<option> Approved </option>
									<option> Rejected </option>
								</select>
								<label class="focus-label">Leave Status</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
					   </div>     
                    </div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Leave Type</th>
											<th>From</th>
											<th>To</th>
											<th>No of Days</th>
											<th>Reason</th>
											<th class="text-center">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													<a href="#">Richard Miles <span>Web Developer</span></a>
												</h2>
											</td>
											<td>Casual Leave</td>
											<td>8 Mar 2019</td>
											<td>9 Mar 2019</td>
											<td>2 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-purple"></i> New
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													<a>	John Doe  <span>Web Designer</span></a>
												</h2>
											</td>
											<td>Medical Leave</td>
											<td>27 Feb 2019</td>
											<td>27 Feb 2019</td>
											<td>1 day</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													<a>John Smith <span>Android Developer</span></a>
												</h2>
											</td>
											<td>LOP</td>
											<td>24 Feb 2019</td>
											<td>25 Feb 2019</td>
											<td>2 days</td>
											<td>Personnal</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													<a>Mike Litorus  <span>IOS Developer</span></a>
												</h2>
											</td>
											<td>Paternity Leave</td>
											<td>13 Feb 2019</td>
											<td>17 Feb 2019</td>
											<td>5 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> Declined
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-24.jpg"></a>
													<a>Richard Parker <span>Web Developer</span></a>
												</h2>
											</td>
											<td>Casual Leave</td>
											<td>30 Jan 2019</td>
											<td>31 Jan 2019</td>
											<td>2 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-purple"></i> New
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-08.jpg"></a>
													<a>Catherine Manseau <span>Web Developer</span></a>
												</h2>
											</td>
											<td>Maternity Leave</td>
											<td>5 Jan 2019</td>
											<td>15 Jan 2019</td>
											<td>10 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-15.jpg"></a>
													<a>Buster Wigton <span>Web Developer</span></a>
												</h2>
											</td>
											<td>Hospitalisation</td>
											<td>15 Jan 2019</td>
											<td>25 Jan 2019</td>
											<td>10 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-20.jpg"></a>
													<a>Melita Faucher <span>Web Developer</span></a>
												</h2>
											</td>
											<td>Casual Leave</td>
											<td>13 Jan 2019</td>
											<td>14 Jan 2019</td>
											<td>2 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> Declined
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-03.jpg"></a>
													<a>Tarah Shropshire <span>Web Developer</span></a>
												</h2>
											</td>
											<td>Casual Leave</td>
											<td>10 Jan 2019</td>
											<td>10 Jan 2019</td>
											<td>1 day</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-purple"></i> New
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-20.jpg"></a>
													<a>Domenic Houston <span>Web Developer</span></a>
												</h2>
											</td>
											<td>Casual Leave</td>
											<td>10 Jan 2019</td>
											<td>11 Jan 2019</td>
											<td>2 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													<a>John Doe <span>Web Designer</span></a>
												</h2>
											</td>
											<td>Casual Leave</td>
											<td>9 Jan 2019</td>
											<td>10 Jan 2019</td>
											<td>2 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-success"></i> Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-25.jpg"></a>
													<a>Rolland Webber <span>Web Developer</span></a>
												</h2>
											</td>
											<td>Casual Leave</td>
											<td>7 Jan 2019</td>
											<td>8 Jan 2019</td>
											<td>2 days</td>
											<td>Going to Hospital</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> Declined
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
				
				<!-- Add Leave Modal -->
				<?php include_once("includes/modals/leave/add_leave.php"); ?>
				<!-- /Add Leave Modal -->
				
				<!-- Edit Leave Modal -->
				<?php include_once("includes/modals/leave/edit_leave.php"); ?>
				<!-- /Edit Leave Modal -->

				<!-- Approve Leave Modal -->
				<?php include_once("includes/modals/leave/approve_leave.php"); ?>
				<!-- /Approve Leave Modal -->
				
				<!-- Delete Leave Modal -->
				<?php include_once("includes/modals/leave/delete_leave.php"); ?>
				<!-- /Delete Leave Modal -->
				
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>