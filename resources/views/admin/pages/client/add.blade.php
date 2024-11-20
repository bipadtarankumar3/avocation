@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <form action="{{ isset($user) ? URL::to('admin/client/save_client/' . $user->id) : URL::to('admin/client/save_client') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <h5 class="card-header">Details</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Client Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Client Name" value="{{ isset($user) ? $user->name : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Client Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Client Email" value="{{ isset($user) ? $user->email : '' }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ isset($user) ? $user->phone : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ isset($user) ? $user->address : '' }}" required>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5 class="card-header">Publish</h5>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="form-check mb-2">
                                    <input type="radio" id="status_draft" name="status" class="form-check-input" value="Draft" 
                                        {{ isset($user) ? ($user->status == 'Draft' ? 'checked' : '') : 'checked' }}>
                                    <label class="form-check-label" for="status_draft">Pending</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="status_publish" name="status" class="form-check-input" value="Publish" 
                                        {{ isset($user) && $user->status == 'Publish' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status_publish">Publish</label>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ isset($user) ? 'Update' : 'Submit' }}</button>
                                    <a href="{{URL::to('admin/client')}}">
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Back</button> 
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
