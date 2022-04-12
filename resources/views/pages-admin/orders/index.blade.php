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
    
        <div class="card">
            <div class="card-header ">
    
                <h4 class="text-secondary float-start"><strong>ORDERS</strong></h4> 
                         
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#createProduct">
                    Create
                </button> --}}

            </div>
    
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-hover text-center" id="myTable">
                        <caption>List of Products</caption>
                        <thead class="">
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Order Type</th>
                                <th scope="col">Payment Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                
                        <tbody id="">
                            <tr>
                                <td> <strong>ORDER-000001</strong> </td>
                                <td> <strong>Timestamp</strong> </td>
                                <td> <strong>Juan Dela Cruz</strong> </td>
                                <td> <strong>Pick-Up</strong> </td>
                                <td> <strong>Cash</strong></td>
                                <td>
                                    <button class="btn btn-warning btn-sm">view</button>
                                </td>
                            </tr>
                        </tbody>    
                    </table>
                </div>   
            </div>
        </div>
    </div>

    
@endsection