@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
     

        <div class="mb-2">
            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-0">{{$title}}</h5>
                </div>
                <div class="col-md-2">
                    {{-- <a href="{{URL::To('admin/consignment/consignment-add')}}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add
                        New</a> --}}
                       
                </div>
            </div>


        </div>
        <div class="card p-4">
            {{-- <h5 class="card-header">{{ $title }}</h5> --}}

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Progress</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Completed</button>
                </li>
                
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                    <div class="table-responsive text-nowrap">
                        <table class="table" id="zero_config">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Actions</th>
                                    <th>Map View</th>
                                    <th>Consignment Number</th>
                                    <th>Pickup Address</th>
                                    <th>Start End Date/Time</th>
                                    <th>Driver Name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                               
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="{{URL::to('admin/user/approved_user/1')}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                          </div>
                                        </div>
                                    </td>
                                    
                                    <td><a href="{{URL::to('admin/consignment/mapView/1')}}" target="_blank" >See Map</a></td>
                                    <td>CN34324</td>
                                    <td>Kolkata New town</td>
                                    <td>12/12/2024  10:15 AM</td>
                                    <td>Jhon</td>
                                    <td>
                                        <button class="btn btn-sm btn-success">Start</button>
                                    </td>
                                </tr>
                                
        
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                
                    <div class="table-responsive text-nowrap">
                        <table class="table" id="zero_config">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Actions</th>
                                    <th>Consignment Number</th>
                                    <th>Pickup Address</th>
                                    <th>Start End Date/Time</th>
                                    <th>Driver Name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                               
                                
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="{{URL::to('admin/user/approved_user/1')}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                          </div>
                                        </div>
                                    </td>
                                    
                                    <td>CN34324</td>
                                    <td>Kolkata New town</td>
                                    <td>12/12/2024  07:15 PM</td>
                                    <td>Jhon</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger">End</button>
                                    </td>
                                </tr>
        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            
        </div>
    </div>


    
    {{-- Modal for displaying the image --}}
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" id="modalImage" class="img-fluid" alt="User Image">
                </div>
            </div>
        </div>
    </div>


    <script>
        function showImage(src) {
            document.getElementById('modalImage').src = src;
        }
    </script>
@endsection
