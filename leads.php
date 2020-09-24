<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Leads - HRMS admin template</title>
		
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
								<h3 class="page-title">Leads</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leads</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped table-nowrap custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Lead Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Project</th>
											<th>Assigned Staff</th>
											<th>Status</th>
											<th>Created</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
													<a href="#">Wilmer Deluna</a>
												</h2>
											</td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Hospital Administration</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
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
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>10 hours ago</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
													<a href="#">Lesley Grauer</a>
												</h2>
											</td>
											<td>lesleygrauer@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Video Calling App</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>5 Mar 2019</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
													<a href="#">Jeffery Lalor</a>
												</h2>
											</td>
											<td>jefferylalor@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Office Management</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>27 Feb 2019</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
													<a href="#">Wilmer Deluna</a>
												</h2>
											</td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Hospital Administration</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>10 hours ago</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
													<a href="#">Lesley Grauer</a>
												</h2>
											</td>
											<td>lesleygrauer@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Video Calling App</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>5 Mar 2019</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
													<a href="#">Jeffery Lalor</a>
												</h2>
											</td>
											<td>jefferylalor@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Office Management</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>27 Feb 2019</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>7</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
													<a href="#">Wilmer Deluna</a>
												</h2>
											</td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Hospital Administration</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>10 hours ago</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>8</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
													<a href="#">Lesley Grauer</a>
												</h2>
											</td>
											<td>lesleygrauer@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Video Calling App</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>5 Mar 2019</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>9</td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
													<a href="#">Jeffery Lalor</a>
												</h2>
											</td>
											<td>jefferylalor@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.php">Office Management</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="badge bg-inverse-success">Working</span></td>
											<td>27 Feb 2019</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>