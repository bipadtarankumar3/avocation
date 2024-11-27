@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}
        </h6>

        <div class="mb-2">
            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-0">{{ $title }}</h5>
                </div>
                <div class="col-md-2">
                    <a href="{{URL::To('admin/employee-allowance/add')}}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
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
                            <th>Employee Salary</th>
                            <th>ESI</th>
                            <th>PF Deduction</th>
                            <th>PTax Deduction</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($allowances as $key => $allowance)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <a href="{{ URL::to('admin/employee-allowance/edit', $allowance->id) }}">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="{{ URL::to('admin/employee-allowance/delete', $allowance->id) }}"
                                        onclick="deleteConfirmation(event)">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                                <td>{{ $allowance->salary }}</td>
                                <td>{{ $allowance->esi }}</td>
                                <td>{{ $allowance->pf_deduction }}</td>
                                <td>{{ $allowance->ptax_deduction }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    function deleteConfirmation(event) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete this allowance?')) {
            window.location.href = event.currentTarget.getAttribute('href');
        }
    }
</script>
@endsection
