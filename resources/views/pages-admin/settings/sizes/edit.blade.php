@extends('pages-admin.app')

@section('content')

<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12">
            <div class="bg-light border-0">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb p-3">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"> <a href="{{ route('admin.size.index') }}">Size</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>      
            </div>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="mt-3 col-5">
            <div class="card">
                <div class="card-body">
                    <div class="container">
        
                        <h4 class="text-secondaty text-center"> <strong> Edit Size</strong> </h4>
        
                        <hr>
        
                        <form action="{{ route('admin.size.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="modal-body">
                                <div class="container ">
                    
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="size" name="size" placeholder=" " value="{{ $data->size }}">
                                        <label for="size">Size</label>
                                    </div>
                    
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="price" name="price"  placeholder=" " value="{{ $data->price }}">
                                        <label for="price">Price</label>
                                    </div>
                    
                                </div>
                            
                            </div>  
    
                            <hr>
                    
                            <div class="">
                                <button type="submit" class="float-end btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>


</div>



@endsection
