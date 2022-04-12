@extends('pages-admin.app')

@section('content') 


    <div class="container-fluid">

        
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12">
                <div class="bg-light border-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-3">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User-Management</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>      
                </div>
            </div>
        </div>
                
        <div class="row justify-content-center">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">

                    <form action="">
                        <div class="card-body">

                            <h4 class="text-secondary text-center"> <strong>USER DETAILS</strong> </h4>
    
                            <hr>
    
                            <div class="row container">
    
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"name="name" placeholder=" ">
                                    <label for="name">Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="address" placeholder=" ">
                                    <label for="name">Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="city" placeholder=" ">
                                    <label for="name">City</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="contact_number" placeholder=" ">
                                    <label for="name">Contact Number</label>
                                </div>

                                <h4 class="text-secondary text-center"> <strong>ACCOUNT DETAILS</strong> </h4>
    
                                <hr>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="address" placeholder=" ">
                                    <label for="name">Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="city" placeholder=" ">
                                    <label for="name">Password</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="contact_number" placeholder=" ">
                                    <label for="name">Confirm Password</label>
                                </div>
    
                                <button type="submit" class="mt-2 btn btn-primary"> 
                                    Update
                                    {{--notify customer na in-process na ang order--}}
                                </button>

                            </div>
                            
                        </div>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>

    
   
@endsection
