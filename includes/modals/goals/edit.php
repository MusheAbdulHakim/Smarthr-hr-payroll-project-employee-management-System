<div id="edit_goal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Goal Tracking</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Goal Type</label>
												<select class="select">
													<option selected="">Invoice Goal</option>
													<option>Event Goal</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Subject</label>
												<input class="form-control" type="text" value="Test Goal">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Target Achievement</label>
												<input class="form-control" type="text" value="Lorem ipsum dollar">
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>End Date <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
											</div>
										</div>
										<div class="col-sm-12 mb-3">
											<div class="form-group">
												<label for="customRange">Progress</label>
												<input type="range" class="form-control-range custom-range" id="customRange">
												<div class="mt-2" id="result">Progress Value: <b></b></div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label>Description <span class="text-danger">*</span></label>
												<textarea class="form-control" rows="4">Lorem ipsum dollar</textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-form-label">Status</label>
												<select class="select">
													<option>Active</option>
													<option>Inactive</option>
												</select>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>