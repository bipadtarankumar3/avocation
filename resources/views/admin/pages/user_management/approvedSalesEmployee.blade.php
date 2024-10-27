@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4">
            <span class="text-muted fw-light">Admin/</span> 
            {{ Request::segment(2) . '/' . Request::segment(3) }}
        </h6>
        <div class="mb-2">
            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-0">{{$title}}</h5>
                </div>
                <div class="col-md-2">
                    {{-- Add New Button (If needed) --}}
                </div>
            </div>
        </div>

        <div class="card p-4">
            <div class="table-responsive text-nowrap">
                <table class="table" id="zero_config">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Actions</th>
                            <th>User Type</th>
                            <th>Selfie</th>
                            <th>Name</th>
                            <th> Code</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Vehicle Number</th>
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
                                      <a href="javascript:void(0);" class="dropdown-item" onclick="viewDetails('General Employee', 'John', 'Em-001', 'Kolkata', 'New Town', 'Driver', '0123456789', 'john@gmail.com', 'Wb 20E 2356', 'Pending', '{{ URL::to('public/assets/admin/img/logo/sales.jpeg') }}', '{{ URL::to('public/assets/admin/img/logo/aadhar.png') }}', '{{ URL::to('public/assets/admin/img/logo/pan.jpeg') }}')">View</a>
                                    </div>
                                  </div>
                                
                            </td>
                            <td>General Employee</td>
                            <td>
                                <img src="{{ URL::to('public/assets/admin/img/logo/sales.jpeg') }}" alt="Selfie" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ URL::to('public/assets/admin/img/logo/sales.jpeg') }}')">
                            </td>
                           
                            <td>John</td>
                            <td>Em-001</td>
                            <td>Kolkata</td>
                            <td>0123456789</td>
                            <td>john@gmail.com</td>
                            <td>Wb 20E 2356</td>
                            <td>Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal for displaying all user details --}}
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>User Type:</strong> <span id="userType"></span></li>
                        <li class="list-group-item"><strong>Name:</strong> <span id="name"></span></li>
                        <li class="list-group-item"><strong>DL Expiry Date:</strong> <span id="">20/10/2024</span></li>
                        <li class="list-group-item"><strong>DL Image:</strong> <span id=""><img src="{{ URL::to('public/assets/admin/img/logo/dl.jpg') }}" alt="Selfie" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ URL::to('public/assets/admin/img/logo/dl.jpg') }}')"></span></li>
                        
                        <li class="list-group-item"><strong>Employee Code:</strong> <span id="employeeCode"></span></li>
                        <li class="list-group-item"><strong>Location:</strong> <span id="location"></span></li>
                        <li class="list-group-item"><strong>Branch:</strong> <span id="branch"></span></li>
                        <li class="list-group-item"><strong>Function:</strong> <span id="function"></span></li>
                        <li class="list-group-item"><strong>Phone:</strong> <span id="phone"></span></li>
                        <li class="list-group-item"><strong>Email:</strong> <span id="email"></span></li>
                        <li class="list-group-item"><strong>Vehicle Number:</strong> <span id="vehicleNumber"></span></li>
                        <li class="list-group-item"><strong>Status:</strong> <span id="status"></span></li>
                    </ul>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <strong>Selfie:</strong><br>
                            <img id="selfie" src="" alt="Selfie" width="150px">
                        </div>
                        <div>
                            <strong>Aadhar:</strong><br>
                            <img id="aadhar" src="" alt="Aadhar Card" width="150px">
                        </div>
                        <div>
                            <strong>PAN Card:</strong><br>
                            <img id="pan" src="" alt="PAN Card" width="150px">
                        </div>
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

        function viewDetails(userType, name, employeeCode, location, branch, func, phone, email, vehicleNumber, status, selfie, aadhar, pan) {
            document.getElementById('userType').textContent = userType;
            document.getElementById('name').textContent = name;
            document.getElementById('employeeCode').textContent = employeeCode;
            document.getElementById('location').textContent = location;
            document.getElementById('branch').textContent = branch;
            document.getElementById('function').textContent = func;
            document.getElementById('phone').textContent = phone;
            document.getElementById('email').textContent = email;
            document.getElementById('vehicleNumber').textContent = vehicleNumber;
            document.getElementById('status').textContent = status;

            // Set images
            document.getElementById('selfie').src = selfie;
            document.getElementById('aadhar').src = aadhar;
            document.getElementById('pan').src = pan;

            // Show the modal
            var detailsModal = new bootstrap.Modal(document.getElementById('detailsModal'), {});
            detailsModal.show();
        }
    </script>
@endsection
