@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4">
            <span class="text-muted fw-light">Admin/</span> {{ $title }}
        </h6>
        <div class="mb-2">
            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-0">{{ $title }}</h5>
                </div>
                <div class="col-md-2">
                    {{-- Add New Button (If needed) --}}
                </div>
            </div>
        </div>

        <div class="card p-4">
            <table class="table" id="zero_config">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Actions</th>
                        <th>Selfie</th>
                        <th>Name</th>
                        <th>Phone no</th>
                        <th>Check In Date Time</th>
                        <th>Place</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($employees as $index => $employee)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ URL::to('admin/mapView/' . $employee->user_id) }}" target="_blank">
                                            <i class="bx bx-edit-alt me-1"></i> Map
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if ($employee->ckn_selfie)
                                    <img src="{{ $employee->ckn_selfie }}" alt="Selfie" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('{{ $employee->ckn_selfie }}')">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ \Carbon\Carbon::parse($employee->ckn_date)->format('d/m/Y h:i A') }}</td>
                            <td>{{ $employee->ckn_place }}</td>
                            <td>{{ ucfirst($employee->ckn_in_out_status) }}</td>
                        </tr>
                    @empty
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
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
