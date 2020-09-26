<?php 
	session_start();
	error_reporting(0);
	include_once("includes/functions.php");
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}//code for deleting goal from the database
	elseif (isset($_GET['delid'])) {
		$rid=intval($_GET['delid']);
	  $sql="DELETE from `goals` where id=:rid";
	  $query=$dbh->prepare($sql);
	  $query->bindParam(':rid',$rid,PDO::PARAM_STR);
	  $query->execute();
	  echo "<script>alert('Goal deleted Successfully');</script>"; 
	  echo "<script>window.location.href ='goal-tracking.php'</script>";
	}
	if(isset($_REQUEST['unconfirm']))
	{
	$aeid=intval($_GET['unconfirm']);
	$memstatus=1;
	$sql = "UPDATE goals SET Status=:status WHERE  id=:aeid";
	$query = $dbh->prepare($sql);
	$query -> bindParam(':status',$memstatus, PDO::PARAM_STR);
	$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
	$query -> execute();
	$msg= '
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Congrants</strong> Alert <b class="alert-link">Changes Detected</b> Your Changes Has Been Saved.
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
	';
	}

	if(isset($_REQUEST['confirm']))
	{
	$aeid=intval($_GET['confirm']);
	$memstatus=0;
	$sql = "UPDATE goals SET Status=:status WHERE  id=:aeid";
	$query = $dbh->prepare($sql);
	$query -> bindParam(':status',$memstatus, PDO::PARAM_STR);
	$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
	$query -> execute();
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
        <title>Goal - HRMS admin template</title>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
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
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Goal Tracking</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Goal Tracking</li>
								</ul>
							</div>
							<?php echo $msg; ?>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_goal"><i class="fa fa-plus"></i> Add New</a>
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
											<th style="width: 30px;">#</th>
											<th>Goal Type</th>
											<th>Subject</th>
											<th>Target Achievement</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Description </th>
											<th>Status </th>
											<th>Progress </th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<?php
										$sql = "SELECT * FROM goals";
										$query = $dbh->prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $row)
										{	
									?>
									<tbody>
										<tr>
											<td><?php echo $cnt; ?></td>
											<td><?php echo htmlentities($row->Type);?></td>
											<td><?php echo htmlentities($row->Subject);?></td>
											<td><?php echo htmlentities($row->Target);?></td>
											<td>
											<?php echo htmlentities($row->StartDate);?>
											</td>
											<td><?php echo htmlentities($row->EndDate);?></td>
											<td><?php echo htmlentities($row->Description);?></td>
											<td
											<?php if($row->Status == 1)
                                                    {?>
												<a href="goal-tracking.php?confirm=<?php echo htmlentities($row->id);?>" onclick="return confirm('Do you really want to Un-Confirm the Goal?')">
												<i class="fa fa-dot-circle-o text-success"></i> Active</a>
												<?php } else {?>
												<a href="goal-tracking.php?unconfirm=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Confirm the Goal?')">
												<i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
												<?php } ?>
											</td>
											<td><p class="mb-1"><?php echo  "Completed ".htmlentities($row->Progress)."%"; ?></p><div class="progress" style="height:5px">
											<div class="progress-bar bg-primary progress-sm" style="width: 73%;height:10px;"></div></div>
											</td>
											
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_goal"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_goal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
									<?php $cnt +=1; }} ?>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

				<!-- Add Goal Modal -->
				<?php include_once("includes/modals/goals/add.php"); ?>
				<!-- /Add Goal Modal -->
				
				<!-- Edit Goal Modal -->
				<?php include_once("includes/modals/goals/edit.php"); ?>
				<!-- /Edit Goal Modal -->
				
				<!-- Delete Goal Modal -->
				<?php include_once("includes/modals/goals/delete.php"); ?>
				<!-- /Delete Goal Modal -->
			
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

<script>
    $(document).ready(function(){
        // Read value on page load
        $("#result b").php($("#customRange").val());

        // Read value on change
        $("#customRange").change(function(){
            $("#result b").php($(this).val());
        });
    });        
</script>
    </body>
</html>