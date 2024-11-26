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

            
        <div class="mb-2">

            <form action="">
                <div class="row">
                    <div class="col-md-6">
                     
                    </div>
                    <div class="col-md-4">
                        
                        <input type="text" name="search" @if(isset($_GET['search'])) value="{{ $_GET['search'] }}" @endif class="form-control" placeholder="Search" id="">
                           
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-warning">
                            Search</button>
    
                    </div>
                </div>
            </form>
            


        </div>
        <div class="card p-4">
            {{-- <h5 class="card-header">{{ $title }}</h5> --}}

            <div class="map">
                @if (isset($_GET['search']) && !empty($_GET['search']))
                <img src="{{ URL::to('public/assets/admin/img/logo/map4.jpg') }}" width="100%" alt="" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" >
            
                @else
                <img src="{{ URL::to('public/assets/admin/img/logo/map3.jpg') }}" width="100%" alt="" width="100px" class="img-thumbnail" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" >
            
                @endif
              
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
