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
                            <th>Code</th>
                            <th>Location</th>
                            <th>Branch</th>
                            <th>Function</th>
                            <th>Phone</th>
                            <th>Email</th>
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
                            <td>General Employee</td>
                            <td>
                                <img src="{{ URL::to('public/assets/admin/img/logo/selfie.jpeg') }}" alt="" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ URL::to('public/assets/admin/img/logo/selfie.jpeg') }}')">
                            </td>
                            <td>John</td>
                            <td>Em-001</td>
                            <td>Kolkata</td>
                            <td>New Town</td>
                            <td>Sr.Executive</td>
                            <td>0123456789</td>
                            <td>john@gmail.com</td>
                            <td>Pending</td>
                        </tr>
                    </tbody>
                </table>
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
