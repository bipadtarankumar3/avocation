@extends('admin.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h6 class="py-3 mb-4">
        <span class="text-muted fw-light">Admin/</span>
        {{ Request::segment(2) . '/' . Request::segment(3) }}
    </h6>

    <form action="{{ isset($package) ? URL::to('admin/package/save/' . $package->id) : URL::to('admin/package/save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h5 class="card-header">Enter Consignment Details</h5>
                    <div class="card-body">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Pickup</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Drop</button>
                            </li>
                           
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <!-- Serial Number -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="serial_number">Serial No.</label>
                                            <input type="text" class="form-control" id="serial_number" name="serial_number" placeholder="Serial Number" value="{{ isset($package) ? $package->serial_number : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client_name">Client Name</label>
                                            <select name="" id="" class="form-control"> 
        
                                                <option value="">Select Client</option>
                                                <option value="">Client 1</option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <!-- Client Name -->
                                   
        
                                  
                                    
                                </div>
        
                                <div class="row">
        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client_name">Pickup Address</label>
                                            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Pickup Address" value="{{ isset($package) ? $package->client_name : '' }}" required>
                                        </div>
                                    </div>
                                    <!-- No of CN -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_of_cn">Pickup Date</label>
                                            <input type="date" class="form-control" id="no_of_cn" name="no_of_cn" placeholder="No of CN" value="{{ isset($package) ? $package->no_of_cn : '' }}" required>
                                        </div>
                                    </div>
        
                                </div>
        
                                <div class="row">
        
                                     <!-- No of CN -->
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_of_cn">No of CN</label>
                                            <input type="number" class="form-control" id="no_of_cn" name="no_of_cn" placeholder="No of CN" value="{{ isset($package) ? $package->no_of_cn : '' }}" required>
                                        </div>
                                    </div>
                                    <!-- Package -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="package">Package</label>
                                            <input type="number" class="form-control" id="package" name="package" placeholder="Package" value="{{ isset($package) ? $package->package : '' }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <!-- Package Type -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="package_type">Package Type</label>
                                            <input type="text" class="form-control" id="package_type" name="package_type" placeholder="Package Type" value="{{ isset($package) ? $package->package_type : '' }}" required>
                                        </div>
                                    </div>
        
                                    <!-- Weight -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="weight">Weight</label>
                                            <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" value="{{ isset($package) ? $package->weight : '' }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <!-- LM/FM -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lm_fm">LM/FM</label>
                                            <input type="text" class="form-control" id="lm_fm" name="lm_fm" placeholder="LM/FM" value="{{ isset($package) ? $package->lm_fm : '' }}" required>
                                        </div>
                                    </div>
        
                                    <!-- FM Vehicle Number -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fm_vehicle_number">FM Vehicle Number</label>
                                            <input type="text" class="form-control" id="fm_vehicle_number" name="fm_vehicle_number" placeholder="FM Vehicle Number" value="{{ isset($package) ? $package->fm_vehicle_number : '' }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <!-- Handling Cost -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="handling_cost">Handling Cost</label>
                                            <input type="text" class="form-control" id="handling_cost" name="handling_cost" placeholder="Handling Cost" value="{{ isset($package) ? $package->handling_cost : '' }}" required>
                                        </div>
                                    </div>
        
                                    <!-- Cost Amount -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cost_amount">Cost Amount</label>
                                            <input type="text" class="form-control" id="cost_amount" name="cost_amount" placeholder="Cost Amount" value="{{ isset($package) ? $package->cost_amount : '' }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                  
                                    <!-- Condition -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="condition">Condition</label>
                                            <input type="text" class="form-control" id="condition" name="condition" placeholder="Condition" value="{{ isset($package) ? $package->condition : '' }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <!-- Serial Number -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="serial_number">Serial No.</label>
                                            <input type="text" class="form-control" id="serial_number" name="serial_number" placeholder="Serial Number" value="{{ isset($package) ? $package->serial_number : '' }}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client_name">Client Name</label>
                                            <select name="" id="" class="form-control"> 
        
                                                <option value="">Select Client</option>
                                                <option value="">Client 1</option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <!-- Client Name -->
                                   
        
                                  
                                    
                                </div>
        
                                <div class="row">
        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client_name">Drop Address</label>
                                            <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Drop Address" value="{{ isset($package) ? $package->client_name : '' }}" required>
                                        </div>
                                    </div>
                                    <!-- No of CN -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_of_cn">Drop Date</label>
                                            <input type="date" class="form-control" id="no_of_cn" name="no_of_cn" placeholder="No of CN" value="{{ isset($package) ? $package->no_of_cn : '' }}" required>
                                        </div>
                                    </div>
        
                                </div>
        
                                <div class="row">
        
                                     <!-- No of CN -->
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_of_cn">No of CN</label>
                                            <input type="number" class="form-control" id="no_of_cn" name="no_of_cn" placeholder="No of CN" value="{{ isset($package) ? $package->no_of_cn : '' }}" required>
                                        </div>
                                    </div>
                                    <!-- Package -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="package">Package</label>
                                            <input type="number" class="form-control" id="package" name="package" placeholder="Package" value="{{ isset($package) ? $package->package : '' }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <!-- Package Type -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="package_type">Package Type</label>
                                            <input type="text" class="form-control" id="package_type" name="package_type" placeholder="Package Type" value="{{ isset($package) ? $package->package_type : '' }}" required>
                                        </div>
                                    </div>
        
                                    <!-- Weight -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="weight">Weight</label>
                                            <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" value="{{ isset($package) ? $package->weight : '' }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <!-- LM/FM -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lm_fm">LM/FM</label>
                                            <input type="text" class="form-control" id="lm_fm" name="lm_fm" placeholder="LM/FM" value="{{ isset($package) ? $package->lm_fm : '' }}" required>
                                        </div>
                                    </div>
        
                                    <!-- FM Vehicle Number -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fm_vehicle_number">FM Vehicle Number</label>
                                            <input type="text" class="form-control" id="fm_vehicle_number" name="fm_vehicle_number" placeholder="FM Vehicle Number" value="{{ isset($package) ? $package->fm_vehicle_number : '' }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <!-- Handling Cost -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="handling_cost">Handling Cost</label>
                                            <input type="text" class="form-control" id="handling_cost" name="handling_cost" placeholder="Handling Cost" value="{{ isset($package) ? $package->handling_cost : '' }}" required>
                                        </div>
                                    </div>
        
                                    <!-- Cost Amount -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cost_amount">Cost Amount</label>
                                            <input type="text" class="form-control" id="cost_amount" name="cost_amount" placeholder="Cost Amount" value="{{ isset($package) ? $package->cost_amount : '' }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                  
                                    <!-- Condition -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="condition">Condition</label>
                                            <input type="text" class="form-control" id="condition" name="condition" placeholder="Condition" value="{{ isset($package) ? $package->condition : '' }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>

                        


                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="col-md-3">
                <div class="card">
                    <h5 class="card-header">Actions</h5>
                    <div class="card-body">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">{{ isset($package) ? 'Update' : 'Submit' }}</button>
                            <a href="{{URL::to('admin/consignment/consignment')}}">
                                <button type="button" class="btn btn-warning waves-effect waves-light">Back</button> 
                             </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
