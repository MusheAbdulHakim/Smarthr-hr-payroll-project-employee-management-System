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
        <title>Salary Settings - HRMS admin template</title>
		
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
            <?php include_once("includes/setting_sidebar.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Salary Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->
							
							<form>
								
								<!-- DA and HRA Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										DA and HRA 											
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_hra" checked="">
											<label class="onoffswitch-label" for="switch_hra">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>DA (%)</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>HRA (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<!-- /DA and HRA Settings -->
								
								<!-- Provident Fund Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										Provident Fund Settings 											
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_pf" checked="">
											<label class="onoffswitch-label" for="switch_pf">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Employee Share (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Organization Share (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<!-- /Provident Fund Settings -->
								
								<!-- ESI Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										ESI Settings 											
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_esi">
											<label class="onoffswitch-label" for="switch_esi">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Employee Share (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Organization Share (%)</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<!-- /ESI Settings -->
								
								<!-- TDS Settings -->
								<div class="settings-widget">
									<div class="h3 card-title with-switch">
										TDS&nbsp; <small class="form-text text-muted">Annual Salary</small>
										<div class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_tds">
											<label class="onoffswitch-label" for="switch_tds">
												<span class="onoffswitch-inner"></span>
												<span class="onoffswitch-switch"></span>
											</label>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-4">
											<div class="form-group">
												<label>Salary From</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label>Salary To</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label>%</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="d-none d-sm-block">&nbsp;</label>
												<button class="btn btn-danger btn-block set-btn" type="button"><i class="fa fa-trash-o"></i></button>
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-4">
											<div class="form-group">
												<label>Salary From</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label>Salary To</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label>%</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="d-none d-sm-block">&nbsp;</label>
												<button class="btn btn-danger btn-block set-btn" type="button"><i class="fa fa-trash-o"></i></button>
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-sm-2 ml-auto">
											<div class="form-group">
												<button class="btn btn-primary btn-block" type="button"><i class="fa fa-plus"></i></button>
											</div>
										</div>
									</div>
								</div>
								<!-- /TDS Settings -->
								
								<!-- Submit Button -->
								<div class="submit-section">
									<button type="submit" name="submit" class="btn btn-primary submit-btn" type="submit">Save</button>
								</div>
								<!-- /Submit Button -->
								
                            </form>
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