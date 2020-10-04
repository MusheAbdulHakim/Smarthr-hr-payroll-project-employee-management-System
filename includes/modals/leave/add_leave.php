<div id="add_leave" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Leave</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST">
									<div class="form-group">
										<label>Employee Leaving <span class="text-danger">*</span></label>
										<select name="employee" class="select">
										<option>Select Employee</option>
										  <?php 
											$sql2 = "SELECT * from employees";
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
									<div class="form-group">
										<label>From <span class="text-danger">*</span></label>
										<input name="starting_at" class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>To <span class="text-danger">*</span></label>
											<input name="ends_on" class="form-control " type="date">
									</div>
									<div class="form-group">
										<label>Number of days <span class="text-danger">*</span></label>
										<input name="days_count" class="form-control" type="number">
									</div>
									
									<div class="form-group">
										<label>Leave Reason <span class="text-danger">*</span></label>
										<textarea name="reason" rows="4" class="form-control"></textarea>
									</div>
									<div class="submit-section">
										<button type="submit" name="add_leave" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>