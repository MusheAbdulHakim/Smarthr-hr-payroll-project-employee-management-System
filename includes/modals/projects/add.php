<div id="create_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Project Name</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Client</label>
												<select name="client" class="select">
												<option>Select Clients</option>
												<?php 
													$sql2 = "SELECT * from clients";
													$query2 = $dbh -> prepare($sql2);
													$query2->execute();
													$result2=$query2->fetchAll(PDO::FETCH_OBJ);
													foreach($result2 as $row)
													{          
														?>  
													<option value="<?php echo htmlentities($row->FirstName)." ".htmlentities($row->LastName); ?>">
													<?php echo htmlentities($row->FirstName)." ".htmlentities($row->LastName); ?></option>
													<?php } ?> 
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date</label>
												<input name="start_date" class="form-control" type="date">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>End Date</label>
												<input name="end_date" class="form-control" type="date">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label>Rate</label>
												<input name="rate" placeholder="$50" class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label>&nbsp;</label>
												<select name="" class="select">
													<option>Hourly</option>
													<option>Fixed</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Priority</label>
												<select class="select">
													<option>High</option>
													<option>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Project Leader</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Team Leader</label>
												<div class="project-members">
													<a href="#" data-toggle="tooltip" title="Jeffery Lalor" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Team</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Team Members</label>
												<div class="project-members">
													<a href="#" data-toggle="tooltip" title="John Doe" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="">
													</a>
													<a href="#" data-toggle="tooltip" title="Richard Miles" class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="">
													</a>
													<a href="#" data-toggle="tooltip" title="John Smith" class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="">
													</a>
													<a href="#" data-toggle="tooltip" title="Mike Litorus" class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
									</div>
									<div class="form-group">
										<label>Upload Files</label>
										<input class="form-control" type="file">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>