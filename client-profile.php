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
        <title>Client Profile - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
		<link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
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
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="">
													<img src="assets/img/profiles/avatar-19.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0">Global Technologies</h3>
														<h5 class="company-role m-t-0 mb-0">Barry Cuda</h5>
														<small class="text-muted">CEO</small>
														<div class="staff-id">Employee ID : CLT-0001</div>
														<div class="staff-msg"><a href="chat.php" class="btn btn-custom">Send Message</a></div>
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<span class="title">Phone:</span>
															<span class="text"><a href="">9876543210</a></span>
														</li>
														<li>
															<span class="title">Email:</span>
															<span class="text"><a href="">barrycuda@example.com</a></span>
														</li>
														<li>
															<span class="title">Birthday:</span>
															<span class="text">2nd August</span>
														</li>
														<li>
															<span class="title">Address:</span>
															<span class="text">5754 Airport Rd, Coosada, AL, 36020</span>
														</li>
														<li>
															<span class="title">Gender:</span>
															<span class="text">Male</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card tab-box">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item col-sm-3"><a class="nav-link active" data-toggle="tab" href="#myprojects">Projects</a></li>
									<li class="nav-item col-sm-3"><a class="nav-link" data-toggle="tab" href="#tasks">Tasks</a></li>
								</ul>
							</div>
						</div>
					</div>

                    <div class="row">
                        <div class="col-lg-12"> 
							<div class="tab-content profile-tab-content">
								
								<!-- Projects Tab -->
								<div id="myprojects" class="tab-pane fade show active">
									<div class="row">
										<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="dropdown profile-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
													<h4 class="project-title"><a href="project-view.php">Office Management</a></h4>
													<small class="block text-ellipsis m-b-15">
														<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
														<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
													</small>
													<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. When an unknown printer took a galley of type and
														scrambled it...
													</p>
													<div class="pro-deadline m-b-15">
														<div class="sub-title">
															Deadline:
														</div>
														<div class="text-muted">
															17 Apr 2019
														</div>
													</div>
													<div class="project-members m-b-15">
														<div>Project Leader :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
															</li>
														</ul>
													</div>
													<div class="project-members m-b-15">
														<div>Team :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
															</li>
															<li class="dropdown avatar-dropdown">
																<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<div class="avatar-group">
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-02.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-09.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-10.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-05.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-11.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-12.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-13.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-01.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-16.jpg">
																		</a>
																	</div>
																	<div class="avatar-pagination">
																		<ul class="pagination">
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Previous">
																					<span aria-hidden="true">«</span>
																					<span class="sr-only">Previous</span>
																				</a>
																			</li>
																			<li class="page-item"><a class="page-link" href="#">1</a></li>
																			<li class="page-item"><a class="page-link" href="#">2</a></li>
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Next">
																					<span aria-hidden="true">»</span>
																				<span class="sr-only">Next</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</li> 
														</ul>
													</div>
													<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
													<div class="progress progress-xs mb-0">
														<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="dropdown profile-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
													<h4 class="project-title"><a href="project-view.php">Project Management</a></h4>
													<small class="block text-ellipsis m-b-15">
														<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
														<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
													</small>
													<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. When an unknown printer took a galley of type and
														scrambled it...
													</p>
													<div class="pro-deadline m-b-15">
														<div class="sub-title">
															Deadline:
														</div>
														<div class="text-muted">
															17 Apr 2019
														</div>
													</div>
													<div class="project-members m-b-15">
														<div>Project Leader :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
															</li>
														</ul>
													</div>
													<div class="project-members m-b-15">
														<div>Team :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
															</li>
															<li class="dropdown avatar-dropdown">
																<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<div class="avatar-group">
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-02.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-09.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-10.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-05.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-11.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-12.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-13.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-01.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-16.jpg">
																		</a>
																	</div>
																	<div class="avatar-pagination">
																		<ul class="pagination">
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Previous">
																					<span aria-hidden="true">«</span>
																					<span class="sr-only">Previous</span>
																				</a>
																			</li>
																			<li class="page-item"><a class="page-link" href="#">1</a></li>
																			<li class="page-item"><a class="page-link" href="#">2</a></li>
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Next">
																					<span aria-hidden="true">»</span>
																				<span class="sr-only">Next</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
													<div class="progress progress-xs mb-0">
														<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="dropdown profile-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
													<h4 class="project-title"><a href="project-view.php">Video Calling App</a></h4>
													<small class="block text-ellipsis m-b-15">
														<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
														<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
													</small>
													<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. When an unknown printer took a galley of type and
														scrambled it...
													</p>
													<div class="pro-deadline m-b-15">
														<div class="sub-title">
															Deadline:
														</div>
														<div class="text-muted">
															17 Apr 2019
														</div>
													</div>
													<div class="project-members m-b-15">
														<div>Project Leader :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
															</li>
														</ul>
													</div>
													<div class="project-members m-b-15">
														<div>Team :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
															</li>
															<li class="dropdown avatar-dropdown">
																<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<div class="avatar-group">
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-02.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-09.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-10.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-05.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-11.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-12.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-13.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-01.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-16.jpg">
																		</a>
																	</div>
																	<div class="avatar-pagination">
																		<ul class="pagination">
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Previous">
																					<span aria-hidden="true">«</span>
																					<span class="sr-only">Previous</span>
																				</a>
																			</li>
																			<li class="page-item"><a class="page-link" href="#">1</a></li>
																			<li class="page-item"><a class="page-link" href="#">2</a></li>
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Next">
																					<span aria-hidden="true">»</span>
																				<span class="sr-only">Next</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
													<div class="progress progress-xs mb-0">
														<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="dropdown profile-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
													<h4 class="project-title"><a href="project-view.php">Hospital Administration</a></h4>
													<small class="block text-ellipsis m-b-15">
														<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
														<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
													</small>
													<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. When an unknown printer took a galley of type and
														scrambled it...
													</p>
													<div class="pro-deadline m-b-15">
														<div class="sub-title">
															Deadline:
														</div>
														<div class="text-muted">
															17 Apr 2019
														</div>
													</div>
													<div class="project-members m-b-15">
														<div>Project Leader :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
															</li>
														</ul>
													</div>
													<div class="project-members m-b-15">
														<div>Team :</div>
														<ul class="team-members">
															<li>
																<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
															</li>
															<li>
																<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
															</li>
															<li class="dropdown avatar-dropdown">
																<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<div class="avatar-group">
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-02.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-09.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-10.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-05.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-11.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-12.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-13.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-01.jpg">
																		</a>
																		<a class="avatar avatar-xs" href="#">
																			<img alt="" src="assets/img/profiles/avatar-16.jpg">
																		</a>
																	</div>
																	<div class="avatar-pagination">
																		<ul class="pagination">
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Previous">
																					<span aria-hidden="true">«</span>
																					<span class="sr-only">Previous</span>
																				</a>
																			</li>
																			<li class="page-item"><a class="page-link" href="#">1</a></li>
																			<li class="page-item"><a class="page-link" href="#">2</a></li>
																			<li class="page-item">
																				<a class="page-link" href="#" aria-label="Next">
																					<span aria-hidden="true">»</span>
																				<span class="sr-only">Next</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
													<div class="progress progress-xs mb-0">
														<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Projects Tab -->
								
								<!-- Task Tab -->
								<div id="tasks" class="tab-pane fade">
									<div class="project-task">
										<ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
											<li class="nav-item"><a class="nav-link active" href="#all_tasks" data-toggle="tab" aria-expanded="true">All Tasks</a></li>
											<li class="nav-item"><a class="nav-link" href="#pending_tasks" data-toggle="tab" aria-expanded="false">Pending Tasks</a></li>
											<li class="nav-item"><a class="nav-link" href="#completed_tasks" data-toggle="tab" aria-expanded="false">Completed Tasks</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane show active" id="all_tasks">
												<div class="task-wrapper">
													<div class="task-list-container">
														<div class="task-list-body">
															<ul id="task-list">
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient appointment booking</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Appointment booking with payment gateway</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="completed task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label">Doctor available module</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient and Doctor video conferencing</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Private chat module</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient Profile add</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
															</ul>
														</div>
														<div class="task-list-footer">
															<div class="new-task-wrapper">
																<textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
																<span class="error-message hidden">You need to enter a task first</span>
																<span class="add-new-task-btn btn" id="add-task">Add Task</span>
																<span class="btn" id="close-task-panel">Close</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="pending_tasks"></div>
											<div class="tab-pane" id="completed_tasks"></div>
										</div>
									</div>
								</div>
								<!-- /Task Tab -->
								
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
				
            </div>
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
		
		<!-- Task JS -->
		<script src="assets/js/task.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>