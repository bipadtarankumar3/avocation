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
                    <a href="{{URL::To('admin/consignment/consignment-add')}}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add
                        New</a>
                       
                </div>
            </div>


        </div>
        <div class="card p-4">
            {{-- <h5 class="card-header">{{ $title }}</h5> --}}
            <div class="table-responsive text-nowrap">
                <table class="table" id="zero_config">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Actions</th>
                            <th>Serial No</th>
                            <th>Pickup/Drop Details</th>
                            <th>Client Name</th>
                            <th>Pickup Address</th>
                            <th>Drop Address</th>
                            <th>Package Type</th>
                            <th>Cost Amount</th>
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
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#consignmentModal">
                                        <i class="bx bx-show-alt me-1"></i> View
                                    </a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                  </div>
                                </div>
                            </td>
                            
                            <td>CN34324</td>
                            <td>
                                <a class="text-primary " href="#" data-bs-toggle="modal" data-bs-target="#consignmentModal">
                                    <i class="bx bx-show-alt me-1"></i> Pickup
                                </a>
                            </td>
                            <td>Jhon Son</td>
                            <td>Kolkata Sector V</td>
                            <td>Kolkata New Town</td>
                            <td>Container</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{URL::to('admin/user/approved_user/1')}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="#" onclick="viewConsDetails()"> View</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                  </div>
                                </div>
                            </td>
                            
                            <td>CN34324</td>
                            <td>
                                <a class="text-danger " href="#" data-bs-toggle="modal" data-bs-target="#consignmentModal">
                                    <i class="bx bx-show-alt me-1"></i> Drop
                                </a>
                            </td>
                            <td>Jhon Son 2</td>
                            <td>Kolkata Sector V</td>
                            <td>Kolkata New Town</td>
                            <td>Container</td>
                            <td>1000</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    

{{-- Static Modal for displaying consignment details --}}
<div class="modal fade" id="consignmentModal" tabindex="-1" aria-labelledby="consignmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="consignmentModalLabel">Consignment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Serial Number:</strong> CN34324</li>
                    <li class="list-group-item"><strong>Client Name:</strong> John Son</li>
                    <li class="list-group-item"><strong>Pickup Date:</strong> 20/12/2024</li>
                    <li class="list-group-item"><strong>Pickup Address:</strong> Kolkata Sector V</li>
                    <li class="list-group-item"><strong>Drop Address:</strong> Kolkata New Town</li>
                    <li class="list-group-item"><strong>No of CN:</strong> 11</li>
                    <li class="list-group-item"><strong>Package:</strong> 11</li>
                    <li class="list-group-item"><strong>Package Type:</strong> Container</li>
                    <li class="list-group-item"><strong>Weight:</strong> 20KG</li>
                    <li class="list-group-item"><strong>LM/FM:</strong> Container</li>
                    <li class="list-group-item"><strong>FM Vehicle Number:</strong> Container</li>
                    <li class="list-group-item"><strong>Handling Cost:</strong> Container</li>
                    <li class="list-group-item"><strong>Cost Amount:</strong> 1000</li>
                    <li class="list-group-item"><strong>Condition:</strong> Good</li>
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
