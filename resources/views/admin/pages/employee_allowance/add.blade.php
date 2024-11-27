@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <form action="{{ isset($employee_allowance) ? URL::to('admin/employee-allowance/save_employee_allowance/' . $employee_allowance->id) : URL::to('admin/employee-allowance/save_employee_allowance') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <h5 class="card-header">Fill The employee_allowance Fields</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary">Employee salary</label>
                                        <input type="text" class="form-control" id="salary" name="salary" placeholder="Employee salary" value="{{ isset($employee_allowance) ? $employee_allowance->salary : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="esi">ESI</label>
                                        <input type="text" class="form-control" id="esi" name="esi" placeholder="ESI" value="{{ isset($employee_allowance) ? $employee_allowance->esi : '' }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pf_deduction">PF Deduction
                                        </label>
                                        <input type="text" class="form-control" id="pf_deduction" name="pf_deduction" placeholder="PF Deduction" value="{{ isset($employee_allowance) ? $employee_allowance->pf_deduction : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ptax_deduction">PTax Deduction</label>
                                        <input type="text" class="form-control" id="ptax_deduction" name="ptax_deduction" placeholder="PTax Deduction" value="{{ isset($employee_allowance) ? $employee_allowance->ptax_deduction : '' }}" required>
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
                                    <input type="radio" id="status_draft" name="status" class="form-check-input" value="Draft" 
                                        {{ isset($employee_allowance) ? ($employee_allowance->status == 'Draft' ? 'checked' : '') : 'checked' }}>
                                    <label class="form-check-label" for="status_draft">Pending</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="status_publish" name="status" class="form-check-input" value="Publish" 
                                        {{ isset($employee_allowance) && $employee_allowance->status == 'Publish' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status_publish">Publish</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ isset($employee_allowance) ? 'Update' : 'Submit' }}</button>
                                    <a href="{{URL::to('admin/employee-allowance')}}">
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
