<div id="add_expense" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Expense</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Item Name</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Purchase From</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Purchase Date</label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Purchased By </label>
												<select class="select">
													<option>Daniel Porter</option>
													<option>Roger Dixon</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Amount</label>
												<input placeholder="$50" class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Paid By</label>
												<select class="select">
													<option>Cash</option>
													<option>Cheque</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Status</label>
												<select class="select">
													<option>Pending</option>
													<option>Approved</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Attachments</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
									<div class="attach-files">
										<ul>
											<li>
												<img src="assets/img/placeholder.jpg" alt="">
												<a href="#" class="fa fa-close file-remove"></a>
											</li>
											<li>
												<img src="assets/img/placeholder.jpg" alt="">
												<a href="#" class="fa fa-close file-remove"></a>
											</li>
										</ul>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>