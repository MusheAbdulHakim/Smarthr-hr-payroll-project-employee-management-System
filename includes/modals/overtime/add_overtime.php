<div id="add_overtime" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Overtime</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST">
									<div class="form-group">
										<label>Select Employee <span class="text-danger">*</span></label>
										<select require name="employee" class="select">
											<option>Select Employee Name</option>
											<?php 
											$sql2 = "SELECT * from employees";
											$query2 = $dbh -> prepare($sql2);
											$query2->execute();
											$result2=$query2->fetchAll(PDO::FETCH_OBJ);
											foreach($result2 as $row)
											{          
												?>  
											<option value="<?php echo htmlentities($row->FirstName).' '.htmlentities($row->LastName); ?>">
											<?php echo htmlentities($row->FirstName)." ".htmlentities($row->LastName); ?></option>
											<?php } ?> 
										</select>
									</div>
									<div class="form-group">
										<label>Overtime Date <span class="text-danger">*</span></label>
										<input name="ov_date" required class="form-control " type="date">
									</div>
									<div class="form-group">
										<label>Overtime Type <span class="text-danger">*</span></label>
										<input name="ov_type" required class="form-control " type="text">
									</div>

									<div class="form-group">
										<label>Overtime Hours <span class="text-danger">*</span></label>
										<input name="ov_hours" required class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Description <span class="text-danger">*</span></label>
										<textarea name="description" required rows="4" class="form-control"></textarea>
									</div>
									<div class="submit-section">
										<button name="add_overtime" type="submit" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>