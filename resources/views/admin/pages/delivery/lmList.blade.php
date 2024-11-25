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

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Delivery</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Undeliverd</button>
                </li>
               
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive text-nowrap">
                        <table class="table" id="zero_config2">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Actions</th>
                                    <th>Serial No</th>
                                    <th>Logistic Name</th>
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
                                            {{-- <a class="dropdown-item" href="{{URL::to('admin/delivery/deliveryDetails/1')}}">  <i class="bx bx-show-alt me-1"></i> Delivery View</a>
                                            <a class="dropdown-item" href="{{URL::to('admin/delivery/returnDetails/1')}}">  <i class="bx bx-show-alt me-1"></i>Return View</a>
                                             --}}
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consignmentModal">
                                                <i class="bx bx-show-alt me-1"></i> View
                                            </a>
                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                          </div>
                                        </div>
                                    </td>
                                    
                                    <td>CN34324</td>
                                    <td>Riya Services</td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu" style="">
                                            {{-- <a class="dropdown-item" href="{{URL::to('admin/delivery/deliveryDetails/1')}}">  <i class="bx bx-show-alt me-1"></i> Delivery View</a>
                                            <a class="dropdown-item" href="{{URL::to('admin/delivery/returnDetails/1')}}">  <i class="bx bx-show-alt me-1"></i>Return View</a>
                                             --}}


                                             <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consignmentModal">
                                                <i class="bx bx-show-alt me-1"></i> View
                                            </a>

                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                          </div>
                                        </div>
                                    </td>
                                    
                                    <td>CN45698</td>
                                    <td>Dip Services</td>
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
                                    <th>Serial No</th>
                                    <th>Logistic Name</th>
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
                                            {{-- <a class="dropdown-item" href="{{URL::to('admin/delivery/deliveryDetails/1')}}">  <i class="bx bx-show-alt me-1"></i> Delivery View</a>
                                            <a class="dropdown-item" href="{{URL::to('admin/delivery/returnDetails/1')}}">  <i class="bx bx-show-alt me-1"></i>Return View</a>
                                             --}}
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consignmentModal2">
                                                <i class="bx bx-show-alt me-1"></i> View
                                            </a>
                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                          </div>
                                        </div>
                                    </td>
                                    
                                    <td>CN34324</td>
                                    <td>Riya Services</td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu" style="">
                                            {{-- <a class="dropdown-item" href="{{URL::to('admin/delivery/deliveryDetails/1')}}">  <i class="bx bx-show-alt me-1"></i> Delivery View</a>
                                            <a class="dropdown-item" href="{{URL::to('admin/delivery/returnDetails/1')}}">  <i class="bx bx-show-alt me-1"></i>Return View</a>
                                             --}}


                                             <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consignmentModal2">
                                                <i class="bx bx-show-alt me-1"></i> View
                                            </a>

                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                          </div>
                                        </div>
                                    </td>
                                    
                                    <td>CN45698</td>
                                    <td>Dip Services</td>
                                </tr>
        
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>

            {{-- <h5 class="card-header">{{ $title }}</h5> --}}
           
        </div>
    </div>


    

{{-- Static Modal for displaying consignment details --}}
<div class="modal fade" id="consignmentModal" tabindex="-1" aria-labelledby="consignmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="consignmentModalLabel">Delivery Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Serial Number:</strong> 1</li>
                    <li class="list-group-item"><strong>Dispatch Id:</strong> Di123</li>
                    <li class="list-group-item"><strong>Appointment :</strong> CN34324</li>
                   
                    <li class="list-group-item"><strong>Logistic Name:</strong> Dip Services</li>
                    <li class="list-group-item"><strong>Client Name:</strong> John Son</li>
                    <li class="list-group-item"><strong>No of CN:</strong> 11</li>
                    <li class="list-group-item"><strong>Total Package:</strong> 11</li>
                    <li class="list-group-item"><strong>Package Type:</strong> Container</li>
                    <li class="list-group-item"><strong>Total Weight:</strong> 20KG</li>
                    <li class="list-group-item"><strong>Vehicle Number:</strong> Container</li>
                    <li class="list-group-item"><strong>Condition:</strong> Yes</li>
                    <li class="list-group-item"><strong>Handling Cost Amount:</strong> 123</li>
                    <li class="list-group-item">
                        <img src="{{ asset('public/assets/admin/img/logo/default.jpg') }}" 
                             alt="Picture Upload" width="100px" class="img-thumbnail" >
                    </li>
                    <li class="list-group-item"><strong>Condition:</strong> Good</li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="consignmentModal2" tabindex="-1" aria-labelledby="consignmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="consignmentModalLabel">Undeliverd Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Dispatch Id:</strong> Di123</li>
                    <li class="list-group-item"><strong>Appointment :</strong> CN34324</li>
                   
                    <li class="list-group-item"><strong>Logistic Name:</strong> Dip Services</li>
                    <li class="list-group-item"><strong>Client Name:</strong> John Son</li>
                    <li class="list-group-item"><strong>No of CN:</strong> 11</li>
                    <li class="list-group-item"><strong>Total Package:</strong> 11</li>
                    {{-- <li class="list-group-item"><strong>Package Type:</strong> Container</li> --}}
                    <li class="list-group-item"><strong>Total Weight:</strong> 20KG</li>
                    <li class="list-group-item"><strong>Vehicle Number:</strong> Container</li>

                </ul>
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
