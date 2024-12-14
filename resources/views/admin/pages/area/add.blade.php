@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <form action="{{ isset($area) ? URL::to('admin/area/save_area/' . $area->id) : URL::to('admin/area/save_area') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <h5 class="card-header">Fill The area Fields</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="area_company_id">Company</label>
                                        <select name="area_company_id" id="area_company_id" class="form-control">
                                            <option value="">Select Company</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}" {{ isset($area) && $area->area_company_id == $company->id ? 'selected' : '' }}>{{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="area_name">Name</label>
                                        <input type="text" class="form-control" id="area_name" name="area_name" placeholder="Name" value="{{ isset($area) ? $area->area_name : '' }}" required>
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
                                    <input type="radio" id="status_draft" name="area_status" class="form-check-input" value="Draft" 
                                        {{ isset($area) ? ($area->area_status == 'Draft' ? 'checked' : '') : 'checked' }}>
                                    <label class="form-check-label" for="status_draft">Pending</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="status_publish" name="area_status" class="form-check-input" value="Publish" 
                                        {{ isset($area) && $area->area_status == 'Publish' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status_publish">Publish</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ isset($area) ? 'Update' : 'Submit' }}</button>
                                    <a href="{{URL::to('admin/area')}}">
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
