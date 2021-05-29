@extends('layouts.backend')

@section('styles')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    
    <!-- Calendar CSS -->
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
    
@endsection

@section('page-header')
<div class="row align-items-center">
    <div class="col">
        <h3 class="page-title">Events</h3>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Events</li>
        </ul>
    </div>
    <div class="col-auto float-right ml-auto">
        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_event"><i class="fa fa-plus"></i> Add Event</a>
    </div>
</div> 
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    
                        <!-- Calendar -->
                        <div id="calendar"></div>
                        <!-- /Calendar -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Event Modal -->
<div id="add_event" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Event Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Event Date <span class="text-danger">*</span></label>
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Category</label>
                        <select class="select form-control">
                            <option>Danger</option>
                            <option>Success</option>
                            <option>Purple</option>
                            <option>Primary</option>
                            <option>Pink</option>
                            <option>Info</option>
                            <option>Inverse</option>
                            <option>Orange</option>
                            <option>Brown</option>
                            <option>Teal</option>
                            <option>Warning</option>
                        </select>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Event Modal -->

<!-- Event Modal -->
<div class="modal custom-modal fade" id="event-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-success submit-btn save-event">Create event</button>
                <button type="button" class="btn btn-danger submit-btn delete-event" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- /Event Modal -->

<!-- Add Category Modal-->
<div class="modal custom-modal fade" id="add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a category</h4>
            </div>
            <div class="modal-body p-20">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-form-label">Category Name</label>
                            <input class="form-control" placeholder="Enter name" type="text" name="category-name">
                        </div>
                        <div class="col-md-6">
                            <label class="col-form-label">Choose Category Color</label>
                            <select class="form-control" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="pink">Pink</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                                <option value="orange">Orange</option>
                                <option value="brown">Brown</option>
                                <option value="teal">Teal</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger save-category" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /Add Category Modal-->
@endsection

@section('scripts')
<!-- Select2 JS -->
<script src="assets/js/select2.min.js"></script>
		
<!-- Datetimepicker JS -->
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<!-- Calendar JS -->
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/jquery.fullcalendar.js"></script>
@endsection