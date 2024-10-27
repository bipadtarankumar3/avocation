@extends('admin.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h6 class="py-3 mb-4">
        <span class="text-muted fw-light">Admin/</span> {{ Request::segment(2) . '/' . Request::segment(3) }}
    </h6>

    <div class="mb-2">
        <div class="row">
            <div class="col-md-10">
                <h5 class="mb-0">{{$title}}</h5>
            </div>
            <div class="col-md-2">
                {{-- Add New Button (if needed) --}}
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
                        <th>Date Of Visit</th>
                        <th>Address</th>
                        <th>Client/Company</th>
                        <th>Contact Person</th>
                        <th>Designation</th>
                        <th>Phone No</th>
                        <th>Visiting Card</th>
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
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{URL::to('admin/user/approved_user/1')}}"><i class="bx bx-edit-alt me-1"></i> Status Change</a>
                                    <a class="dropdown-item" href="javascript:void(0);" 
                                       onclick="ViewDetails('CN34324', '11/07/2024', 'Kolkata New Town', 'AWS PVT', 'John', 'Supervisor', '123465789', '0987654321', 'Saltlake', 'public/assets/admin/img/logo/dl.jpg', 'Remarks')">
                                       <i class="bx bx-show-alt me-1"></i> View
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>11/07/2024</td>
                        <td>Kolkata New Town</td>
                        <td>AWS PVT</td>
                        <td>John</td>
                        <td>Supervisor</td>
                        <td>123465789</td>
                        <td>
                            <img src="{{ URL::to('public/assets/admin/img/logo/dl.jpg') }}" alt="Visiting Card" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ URL::to('public/assets/admin/img/logo/dl.jpg') }}')">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal for displaying consignment details --}}
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Consignment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Serial Number:</strong> <span id="serialNumber"></span></li>
                    <li class="list-group-item"><strong>Date Of Visit:</strong> <span id="dateOfVisit"></span></li>
                    <li class="list-group-item"><strong>Address:</strong> <span id="address"></span></li>
                    <li class="list-group-item"><strong>Client/Company:</strong> <span id="clientCompany"></span></li>
                    <li class="list-group-item"><strong>Contact Person:</strong> <span id="contactPerson"></span></li>
                    <li class="list-group-item"><strong>Designation:</strong> <span id="designation"></span></li>
                    <li class="list-group-item"><strong>Phone No:</strong> <span id="phoneNo"></span></li>
                    <li class="list-group-item"><strong>Office Phone No:</strong> <span id="officePhoneNo"></span></li>
                    <li class="list-group-item"><strong>Zone/Area:</strong> <span id="zoneArea"></span></li>
                    <li class="list-group-item"><strong>Visiting Card:</strong>
                        <img src="" id="visitingCardImage" alt="Visiting Card" width="100px" class="img-thumbnail">
                    </li>
                    <li class="list-group-item"><strong>Remarks:</strong> <span id="remarks"></span></li>
                </ul>
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

    function ViewDetails(serialNumber, dateOfVisit, address, clientCompany, contactPerson, designation, phoneNo, officePhoneNo, zoneArea, visitingCard, remarks) {
        document.getElementById('serialNumber').textContent = serialNumber;
        document.getElementById('dateOfVisit').textContent = dateOfVisit;
        document.getElementById('address').textContent = address;
        document.getElementById('clientCompany').textContent = clientCompany;
        document.getElementById('contactPerson').textContent = contactPerson;
        document.getElementById('designation').textContent = designation;
        document.getElementById('phoneNo').textContent = phoneNo;
        document.getElementById('officePhoneNo').textContent = officePhoneNo;
        document.getElementById('zoneArea').textContent = zoneArea;
        document.getElementById('visitingCardImage').src = '{{ URL::to("/") }}/' + visitingCard;
        document.getElementById('remarks').textContent = remarks;

        // Show the modal
        var detailsModal = new bootstrap.Modal(document.getElementById('detailsModal'), {});
        detailsModal.show();
    }
</script>
@endsection
