<div id="add_type" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add New Goal Type</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST">
									<div class="form-group">
										<label>Goal Type <span class="text-danger">*</span></label>
										<input required name="type" class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Description <span class="text-danger">*</span></label>
										<textarea required name="description" class="form-control" rows="4"></textarea>
									</div>
									<div class="form-group">
										<label class="col-form-label">Status</label>
										<select name="status" class="select">
											<option value="1">Active</option>
											<option value="0">Inactive</option>
										</select>
									</div>
									<div class="submit-section">
										<button type="submit" name="add_goal_type" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				