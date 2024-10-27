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
                {{-- Optional Button to add new item --}}
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
                        <th>Serial Number</th>
                        <th>Client Name</th>
                        <th>Pickup Address</th>
                        <th>Drop Address</th>
                        <th>Package</th>
                        <th>Package Type</th>
                        <th>Driver Name</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" onclick="openAssignModal()">Assign</a>
                        </td>
                        <td>CN34324</td>
                        <td>John Son</td>
                        <td>Kolkata Sector V</td>
                        <td>Kolkata New Town</td>
                        <td>11</td>
                        <td>Container</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm">Assigned</a>
                        </td>
                        <td>CN34325</td>
                        <td>John Doe</td>
                        <td>Kolkata Sector V</td>
                        <td>Kolkata New Town</td>
                        <td>11</td>
                        <td>Container</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Driver 1</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal for assigning driver --}}
<div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="assignModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignModalLabel">Assign Driver</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="assignForm">
                    <div class="form-group mb-3">
                        <label for="driver">Select Driver</label>
                        <select class="form-control" id="driver" name="driver" required>
                            <option value="">-- Select Driver --</option>
                            <option value="1">Driver 1</option>
                            <option value="2">Driver 2</option>
                        </select>
                    </div>

                

                    <button type="button" class="btn btn-primary" onclick="submitAssignment()">Assign</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function openAssignModal() {
        var assignModal = new bootstrap.Modal(document.getElementById('assignModal'));
        assignModal.show();
    }

    function submitAssignment() {
        // Add logic to handle the form submission
        var driver = document.getElementById('driver').value;
        var vehicle = document.getElementById('vehicle').value;

        if (driver && vehicle) {
            alert('Assigned Driver: ' + driver + ', Vehicle: ' + vehicle);
            // You can add form submission logic here
        } else {
            alert('Please select both driver and vehicle.');
        }
    }
</script>

@endsection
