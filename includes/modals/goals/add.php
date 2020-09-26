<div id="add_goal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Goal Tracking</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Goal Type</label>
												<select name="goal_type" class="select">
													<option value="">Select Goal Type</option>
												<?php 
												$sql2 = "SELECT * from goal_type";
												$query2 = $dbh -> prepare($sql2);
												$query2->execute();
												$result2=$query2->fetchAll(PDO::FETCH_OBJ);
												foreach($result2 as $row)
												{          
													?>  
												<option value="<?php echo htmlentities($row->Type);?>">
												<?php echo htmlentities($row->Type);?></option>
												<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Subject</label>
												<input required name="subject" class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Target Achievement</label>
												<input required name="target" class="form-control" type="text">
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date </label>
												<input required name="start_date" class="form-control " type="date">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>End Date <span class="text-danger">*</span></label>
												<input required name="end_date" class="form-control " type="date">
											</div>
										</div>
										
										<div class="col-sm-12">
											<div class="form-group">
												<label>Description</label>
												<textarea name="description" required class="form-control" rows="4"></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Status</label>
												<select name="status" class="select">
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>

											<div class="col-sm-6">
												<div class="form-group">
													<label hidden class="col-form-label">Progress</label>
													<input hidden name="progress" value="<?php echo floatval(0/100); ?>" class="form-control" type="text">
												</div>
											</div>
											
										</div>
									</div>
									<div class="submit-section">
										<button type="submit" name="add_goal" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>