@extends('pages-admin.app')

@section('content') 


    <div class="container-fluid">

        
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12">
                <div class="bg-light border-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-3">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Orders</li>
                        </ol>
                    </nav>      
                </div>
            </div>
        </div>
                
        <div class="row justify-content-center">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
                <div class="card">

                    <div class="card-body">
                        <h4 class="text-secondary text-center"> <strong>BILLING DETAILS</strong> </h4>

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

                            <div class="col-6">
                                Email: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>email@gmail.com</strong> 
                            </div>

                        </div>

                        <hr>
                        
                        <h4 class="text-secondary text-center"> <strong>ORDER SUMMARY</strong> </h4>

                        <div class="mt-3 row container">

                            <div class="col-6">
                                Order ID: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>ORDER-000001</strong>
                            </div>

                            <div class="col-6">
                                Product Name: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>Kahawa Latte</strong>
                            </div>

                            <div class="col-6">
                                Category: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>Beverages</strong> 
                            </div>

                            <div class="col-6">
                                Size: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>12oz</strong> 
                            </div>

                            <div class="col-6">
                                Price: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>59</strong> 
                            </div>

                            <div class="col-6">
                                Quantity: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>1</strong> 
                            </div>

                            <hr>
                            
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
                <div class="card">

                    <div class="card-body">

                        <h4 class="text-secondary text-center"> <strong>CHECKOUT DETAILS</strong> </h4>

                        <hr>

                        <div class="row container">

                            <div class="col-6">
                                Order Type: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>Pick-Up</strong> 
                            </div>

                            <div class="col-6">
                                Payment Type: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>Cash On Delivery</strong> 
                            </div>

                            <div class="col-6">
                                Status: 
                            </div>

                            <div class="col-6 mb-3">
                                {{--status pending default--}}
                                <span class="badge bg-warning">Pending</span>
                                {{--if have ya status moving--}}
                                {{-- 
                                    if admin accepts order then 
                                    <span class="badge bg-primary">In-Process</span>

                                    if order type is pickup then 
                                    <span class="badge bg-info">Ready for Pick-Up</span> 

                                    else if order type is cash on delivery then
                                    <span class="badge bg-info">Out for Delivery</span> 

                                    <span class="badge bg-success">Completed</span> 
                                --}}
                            </div>

                            <div class="col-6">
                                Total: 
                            </div>

                            <div class="col-6 mb-3">
                                <strong>P59</strong> 
                            </div>

                            <hr>

                            <div class="float-end">
                                
                                <form action="">
                                    <button type="submit" class="mt-2 btn btn-success"> 
                                        Accept Order
                                        {{--notify customer na in-process na ang order--}}
                                    </button>
                                </form>

                                <button class="mt-2 btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectOrder"> 
                                    Reject Order
                                    {{--notify customer na rejected and order nya--}}
                                </button>
                                
                                @include('pages-admin.orders.reject')

                                {{--if order is accepted lalabas itong button else if rejected mawawala lahat ng buttons
                                then change status into rejected --}}
                                
                                <form action="">
                                    <button type="submit" class="mt-2 btn btn-primary"> 
                                        Preparation Completed
                                        {{-- if order is pick up type change status and notify customer na ready to pick up anf order --}}
                                        {{--else if order is delivery then change status and notify customer na out-for delivery ang order--}}
                                        {{--notify customer na in-process na ang order--}}
                                    </button>
                                </form>
                                

                            </div>
 
                        </div>
    
                    </div>
                </div>
            </div>

        </div>
    </div>

    
   
@endsection
