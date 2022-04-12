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
                            <li class="breadcrumb-item active" aria-current="page">View</li>
                        </ol>
                    </nav>      
                </div>
            </div>
        </div>
                
        <div class="row justify-content-center">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">

                    <div class="card-body">
                        <h4 class="text-secondary text-center"> <strong>USER DETAILS</strong> </h4>

                        <hr>

                        <div class="row container">

                            <div class="col-6">
                                Name: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>Juan Dela Cruz</strong> 
                            </div>

                            <div class="col-6">
                                Address: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>Sta Maria</strong> 
                            </div>

                            <div class="col-6">
                                Contact Number: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>090909090909</strong> 
                            </div>

                            <div class="col-6">
                                City: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>Zamboanga</strong> 
                            </div>


                            <h4 class="text-secondary text-center"> <strong>ACCOUNT DETAILS</strong> </h4>

                            <hr>

                            <div class="col-6">
                                Role: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>Staff</strong> 
                            </div>


                            <div class="col-6">
                                Email: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>email@gmail.com</strong> 
                            </div>

                            <div class="col-6">
                                Password: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>************</strong> 
                            </div>

                            <form action="">
                                <button type="submit" class="mt-2 btn btn-primary"> 
                                    Edit Account
                                    {{--notify customer na in-process na ang order--}}
                                </button>
                            </form>


                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

    
   
@endsection
