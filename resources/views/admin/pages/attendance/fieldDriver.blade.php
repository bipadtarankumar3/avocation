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

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Check In</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Check Out</button>
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
                                    <th>Selfie</th>
                                    <th>Qr Code</th>
                                    <th>OBD Image</th>
                                    <th>Name</th>
                                    <th>Check In Date Time</th>
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
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                          </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ URL::to('public/assets/admin/img/logo/selfie.jpeg') }}" alt="" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ URL::to('public/assets/admin/img/logo/selfie.jpeg') }}')">
                                    </td>
                                    <td>
                                       
                                        <small>Vehicle Number: WB W3 1234</small><br>
                                        <small>Owner name : Jhon</small><br>
                                        <small>Vehicle model : Test</small><br>
                                        <small>Contact number : 123456789 </small>
                                    </td>
                                    <td>
                                        <img src="{{ URL::to('public/assets/admin/img/logo/odb.jpeg') }}" alt="" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ URL::to('public/assets/admin/img/logo/odb.jpeg') }}')">
                                    </td>
                                    <td>John</td>
                                    <td>20/12/2024 10:15 AM</td>
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
                                    <th>Selfie</th>
                                    <th>Qr Code</th>
                                    <th>OBD Image</th>
                                    <th>Name</th>
                                    <th>Check Out Date Time</th>
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
                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                          </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ URL::to('public/assets/admin/img/logo/selfie.jpeg') }}" alt="" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ URL::to('public/assets/admin/img/logo/selfie.jpeg') }}')">
                                    </td>
                                    <td>
                                        
                                        <small>Vehicle Number: WB W3 1234</small><br>
                                        <small>Owner name : Jhon</small><br>
                                        <small>Vehicle model : Test</small><br>
                                        <small>Contact number : 123456789 </small>
                                    </td>
                                    <td>
                                        <img src="{{ URL::to('public/assets/admin/img/logo/odb.jpeg') }}" alt="" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ URL::to('public/assets/admin/img/logo/odb.jpeg') }}')">
                                    </td>
                                    <td>John</td>
                                    <td>20/12/2024 07:15 PM</td>
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
