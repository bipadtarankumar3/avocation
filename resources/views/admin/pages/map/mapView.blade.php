<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container-xxl flex-grow-1 container-p-y my-4">
       

        <div class="mb-2">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-0">{{$title}}</h5>
                </div>
                <div class="col-md-4">
                    

                        <select name="" class="form-control" id="">
                            <option value="">Select Employee</option>
                            <option value=""> Employee 1</option>
                            <option value=""> Employee 2</option>
                        </select>
                       
                </div>
                <div class="col-md-2">
                    <button class="btn btn-warning">
                        Search</button>

                       <a href="{{URL::To('admin/dashboard')}}" class="btn btn-secondary">
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



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>