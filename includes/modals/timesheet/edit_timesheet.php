<div id="edit_todaywork" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Work Details</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="form-group col-sm-6">
											<label>Project <span class="text-danger">*</span></label>
											<select class="select">
												<option>Office Management</option>
												<option>Project Management</option>
												<option>Video Calling App</option>
												<option>Hospital Administration</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-4">
											<label>Deadline <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control" type="text" value="5 May 2019" readonly="">
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label>Total Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="100" readonly="">
										</div>
										<div class="form-group col-sm-4">
											<label>Remaining Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="60" readonly="">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6">
											<label>Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" value="03/03/2019" type="text">
											</div>
										</div>
										<div class="form-group col-sm-6">
											<label>Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="9">
										</div>
									</div>
									<div class="form-group">
										<label>Description <span class="text-danger">*</span></label>
										<textarea rows="4" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>