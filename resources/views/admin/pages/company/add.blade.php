@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <form action="{{ isset($company) ? URL::to('admin/company/save_company/' . $company->id) : URL::to('admin/company/save_company') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <h5 class="card-header">Fill The Company Fields</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_name">Name</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Name" value="{{ isset($company) ? $company->company_name : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_address">Company Address</label>
                                        <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Company Address" value="{{ isset($company) ? $company->company_address : '' }}" required>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5 class="card-header">Status</h5>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="form-check mb-2">
                                    <input type="radio" id="status_draft" name="company_status" class="form-check-input" value="Draft" 
                                        {{ isset($company) ? ($company->company_status == 'Draft' ? 'checked' : '') : 'checked' }}>
                                    <label class="form-check-label" for="status_draft">Pending</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="status_publish" name="company_status" class="form-check-input" value="Publish" 
                                        {{ isset($company) && $company->company_status == 'Publish' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status_publish">Publish</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ isset($company) ? 'Update' : 'Submit' }}</button>
                                    <a href="{{URL::to('admin/company')}}">
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
