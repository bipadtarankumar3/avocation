@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <form action="{{ isset($coupon) ? URL::to('admin/coupon/add-action/' . $coupon->id) : URL::to('admin/coupon/add-action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Details</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="coupon_code">User Id</label>
                                        <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="User Id" value="{{ isset($coupon) ? $coupon->coupon_code : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="coupon_name">Password</label>
                                        <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Password" value="{{ isset($coupon) ? $coupon->coupon_name : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="coupon_name">Confirm Password</label>
                                        <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Confirm Password" value="{{ isset($coupon) ? $coupon->coupon_name : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="coupon_name">Status</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="">Approved</option>
                                            <option value="">Reject</option>
                                        </select>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ isset($coupon) ? 'Update' : 'Submit' }}</button>
                                    <a href="{{URL::to('admin/user/new-office-employee')}}">
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
