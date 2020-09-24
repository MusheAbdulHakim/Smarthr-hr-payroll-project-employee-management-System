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
        <title>Clients - HRMS admin template</title>
		
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
								<h3 class="page-title">Clients</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Clients</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add Client</a>
								<div class="view-icons">
									<a href="clients.php" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
									<a href="clients-list.php" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Client ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Client Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Select Company</option>
									<option>Global Technologies</option>
									<option>Delta Infotech</option>
								</select>
								<label class="focus-label">Company</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
					<!-- Search Filter -->

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Client ID</th>
											<th>Contact Person</th>
											<th>Email</th>
											<th>Mobile</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt=""></a>
													<a href="client-profile.php">Global Technologies</a>
												</h2>
											</td>
											<td>CLT-0001</td>
											<td>Barry Cuda</td>
											<td>barrycuda@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-29.jpg" alt=""></a>
													<a href="client-profile.php">Delta Infotech</a>
												</h2>
											</td>
											<td>CLT-0002</td>
											<td>Tressa Wexler</td>
											<td>tressawexler@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-07.jpg"></a>
													<a href="client-profile.php">Cream Inc</a>
												</h2>
											</td>
											<td>CLT-0003</td>
											<td>Ruby Bartlett</td>
											<td>rubybartlett@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-06.jpg"></a>
													<a href="client-profile.php">Wellware Company</a>
												</h2>
											</td>
											<td>CLT-0004</td>
											<td>Misty Tison</td>
											<td>mistytison@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-14.jpg" alt=""></a>
													<a href="client-profile.php">Mustang Technologies</a>
												</h2>
											</td>
											<td>CLT-0005</td>
											<td>Daniel Deacon</td>
											<td>danieldeacon@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-18.jpg" alt=""></a>
													<a href="client-profile.php">International Software Inc</a>
												</h2>
											</td>
											<td>CLT-0006</td>
											<td>Walter Weaver</td>
											<td>walterweaver@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-28.jpg" alt=""></a>
													<a href="client-profile.php">Mercury Software Inc</a>
												</h2>
											</td>
											<td>CLT-0007</td>
											<td>Amanda Warren</td>
											<td>amandawarren@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-22.jpg" alt=""></a>
													<a href="client-profile.php">Carlson Tech</a>
												</h2>
											</td>
											<td>CLT-0008</td>
											<td>Betty Carlson</td>
											<td>bettycarlson@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
			
				<!-- Add Client Modal -->
				<?php include_once("includes/modals/clients/add_client.php"); ?>
				<!-- /Add Client Modal -->
				
				<!-- Edit Client Modal -->
				<?php include_once("includes/modals/clients/edit_client.php"); ?>
				<!-- /Edit Client Modal -->
				
				<!-- Delete Client Modal -->
				<?php include_once("includes/modals/clients/delete_client.php"); ?>
				<!-- /Delete Client Modal -->
				
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>