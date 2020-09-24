<div id="add_user" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add User</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>First Name <span class="text-danger">*</span></label>
												<input class="form-control" required name="firstname" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Last Name</label>
												<input class="form-control" required name="lastname" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Username <span class="text-danger">*</span></label>
												<input class="form-control" name="username" required type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Email <span class="text-danger">*</span></label>
												<input class="form-control" required name="email" type="email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Password</label>
												<input class="form-control" name="password" required type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Confirm Password</label>
												<input class="form-control" name="confirm_pass" required type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Phone </label>
												<input class="form-control" name="phone"  required type="number">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Address </label>
												<input type="text" required class="form-control" name="address" id="address">
											</div>
										</div>
										
										<div class="col-sm-6">
											<div class="form-group">
												<label for="profile">Picture</label>
												<input type="file" name="image" required id="profile">
											</div>
										</div>
									
									
									<div class="submit-section">
										<button type="submit" name="add_user" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>