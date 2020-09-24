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
        <title>Salary - HRMS admin template</title>
		
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
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Payslip</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Payslip</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<div class="btn-group btn-group-sm">
									<button class="btn btn-white">CSV</button>
									<button class="btn btn-white">PDF</button>
									<button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<h4 class="payslip-title">Payslip for the month of Feb 2019</h4>
									<div class="row">
										<div class="col-sm-6 m-b-20">
											<img src="assets/img/logo2.png" class="inv-logo" alt="">
											<ul class="list-unstyled mb-0">
												<li>Dreamguy's Technologies</li>
												<li>3864 Quiet Valley Lane,</li>
												<li>Sherman Oaks, CA, 91403</li>
											</ul>
										</div>
										<div class="col-sm-6 m-b-20">
											<div class="invoice-details">
												<h3 class="text-uppercase">Payslip #49029</h3>
												<ul class="list-unstyled">
													<li>Salary Month: <span>March, 2019</span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 m-b-20">
											<ul class="list-unstyled">
												<li><h5 class="mb-0"><strong>John Doe</strong></h5></li>
												<li><span>Web Designer</span></li>
												<li>Employee ID: FT-0009</li>
												<li>Joining Date: 1 Jan 2013</li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div>
												<h4 class="m-b-10"><strong>Earnings</strong></h4>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td><strong>Basic Salary</strong> <span class="float-right">$6500</span></td>
														</tr>
														<tr>
															<td><strong>House Rent Allowance (H.R.A.)</strong> <span class="float-right">$55</span></td>
														</tr>
														<tr>
															<td><strong>Conveyance</strong> <span class="float-right">$55</span></td>
														</tr>
														<tr>
															<td><strong>Other Allowance</strong> <span class="float-right">$55</span></td>
														</tr>
														<tr>
															<td><strong>Total Earnings</strong> <span class="float-right"><strong>$55</strong></span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-sm-6">
											<div>
												<h4 class="m-b-10"><strong>Deductions</strong></h4>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td><strong>Tax Deducted at Source (T.D.S.)</strong> <span class="float-right">$0</span></td>
														</tr>
														<tr>
															<td><strong>Provident Fund</strong> <span class="float-right">$0</span></td>
														</tr>
														<tr>
															<td><strong>ESI</strong> <span class="float-right">$0</span></td>
														</tr>
														<tr>
															<td><strong>Loan</strong> <span class="float-right">$300</span></td>
														</tr>
														<tr>
															<td><strong>Total Deductions</strong> <span class="float-right"><strong>$59698</strong></span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-sm-12">
											<p><strong>Net Salary: $59698</strong> (Fifty nine thousand six hundred and ninety eight only.)</p>
										</div>
									</div>
								</div>
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

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>