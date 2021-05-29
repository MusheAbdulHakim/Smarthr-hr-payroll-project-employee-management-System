@extends('layouts.backend')

@section('content_one')
    <!-- Contact Main Row -->
    <div class="chat-main-row">
				
        <!-- Contact Wrapper -->
        <div class="chat-main-wrapper">
            <div class="col-lg-12 message-view">
                <div class="chat-window">
                    <div class="fixed-header">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="page-title mb-0">Contacts</h4>
                            </div>
                           <div class="col-6">
                                <div class="navbar justify-content-end">
                                    <div class="search-box m-t-0">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="input-group-append">
                                                <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="nav float-right custom-menu">
                                        <li class="nav-item dropdown dropdown-action">
                                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Menu 1</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Menu 2</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-contents">
                        <div class="chat-content-wrap">
                            <div class="chat-wrap-inner">
                                <div class="contact-box">
                                <div class="row">
                                    <div class="contact-cat col-sm-4 col-lg-3">
                                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#add_contact"><i class="fa fa-plus"></i> Add Contact</a>
                                        <div class="roles-menu">
                                            <ul>
                                                <li class="active"><a href="javascript:void(0);">All</a></li>
                                                <li><a href="#">Company</a></li>
                                                <li><a href="#">Client</a></li>
                                                <li><a href="#">Staff</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="contacts-list col-sm-8 col-lg-9">
                                        <ul class="contact-list">
                                            @if(!empty($contacts->count()))
                                            @foreach ($contacts as $contact)
                                            <li>
                                                <div class="contact-cont">
                                                    <div class="float-left user-img">
                                                        <a href="profile.html" class="avatar">
                                                            <img class="rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg">
                                                            <span class="status online"></span>
                                                        </a>
                                                    </div>
                                                    <div class="contact-info">
                                                        <span class="contact-name text-ellipsis">{{$contact->name}}</span>
                                                        <span class="contact-date">{{$contact->number}}</span>
                                                    </div>
                                                    <ul class="contact-action">
                                                        <li class="dropdown dropdown-action">
                                                            <a href="" class="dropdown-toggle action-icon" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#edit_contact">Edit</a>
                                                                <a data-id="{{$contact->id}}" class="dropdown-item deletebtn" href="javascript:void(0)" data-toggle="modal">Delete</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            @endforeach  
                                              <x-modals.delete :route="'contact.destroy'"  :title="'contact'"  /> 
                                               <!-- Edit Contact Modal -->
                                                <div class="modal custom-modal fade" id="edit_contact" role="dialog">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Contact</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('contacts')}}" method="POST">
                                                                    @csrf
                                                                    @method("PUT")
                                                                    <div class="form-group">
                                                                        <label>Name <span class="text-danger">*</span></label>
                                                                        <input class="form-control edit_name" type="text" name="name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Email Address</label>
                                                                        <input class="form-control edit_email" type="email" name="email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Contact Number <span class="text-danger">*</span></label>
                                                                        <input class="form-control edit_number" type="text" name="number" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="d-block">Status</label>
                                                                        <div class="status-toggle">
                                                                            <input type="checkbox" id="edit_contact_status" name="status" class="check">
                                                                            <label for="edit_contact_status" class="checktoggle">checkbox</label>
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
                                                <!-- /Edit Contact Modal -->  
                                            @endif                                
                                        </ul>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Contact Wrapper -->
        
    </div>
    <!-- /Contact Main Row -->
    
    <!-- Add Contact Modal -->
    <div class="modal custom-modal fade" id="add_contact" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('contacts')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" class="form-control" type="email">
                        </div>
                        <div class="form-group">
                            <label>Contact Number <span class="text-danger">*</span></label>
                            <input name="number" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Status</label>
                            <div class="status-toggle">
                                <input name="status" type="checkbox" checked id="contact_status" class="check">
                                <label for="contact_status" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Contact Modal -->
    
   

@endsection

