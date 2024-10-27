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
                    <a href="{{URL::To('admin/consignment/consignment-status')}}" class="btn btn-warning"> <i class="fa fa-plus" aria-hidden="true"></i> Add
                        Back</a>
                       
                </div>
            </div>


        </div>
        <div class="card p-4">
            {{-- <h5 class="card-header">{{ $title }}</h5> --}}

            <div class="map">
                <img src="{{ URL::to('public/assets/admin/img/logo/map2.png') }}" width="100%" alt="" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" >
            </div>
            
        </div>
    </div>


@endsection
