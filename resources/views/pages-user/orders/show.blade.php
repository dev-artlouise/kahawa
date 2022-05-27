@extends('app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-6">
            <div class="card">

                <div class="card-body">
                    <h4 class="text-secondary text-center"> <strong>BILLING DETAILS</strong> </h4>

                    <hr>

                    <div class="row container">

                        <div class="col-6">
                            Name: 
                        </div>

                        <div class="col-6 mb-3">
                            <strong>{{ $data[0]->firstName }} {{ $data[0]->lastName }}</strong> 
                        </div>

                        <div class="col-6">
                            Address: 
                        </div>

                        <div class="col-6 mb-3">
                            <strong>{{ $data[0]->address }}</strong> 
                        </div>

                        <div class="col-6">
                            Contact Number: 
                        </div>

                        <div class="col-6 mb-3">
                            <strong>{{ $data[0]->contactNumber }}</strong> 
                        </div>

                        <div class="col-6">
                            City: 
                        </div>

                        <div class="col-6 mb-3">
                            <strong>{{ $data[0]->city }}</strong> 
                        </div>

                        <div class="col-6">
                            Email: 
                        </div>

                        <div class="col-6 mb-3">
                            <strong>{{ $data[0]->email }}</strong> 
                        </div>

                    </div>

                    <hr>
                    
                    <h4 class="text-secondary text-center"> <strong>ORDER SUMMARY</strong> </h4>

                    <div class="mt-3 row container-fluid">

                        <table class="table table-sm table-hover text-center">
                            <caption>List of Products</caption>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                @foreach ($data as $key => $item)
                                <tr>
                                    <td> {{ ++$key }}</td>
                                    <td> {{ $item->order_number }}</td>
                                    <td> {{ $item->product_name }}</td>
                                    <td> {{ $item->name}}</td>
                                    <td> {{ $item->size }}</td>
                                    <td> {{ $item->price }}</td>
                                    <td> {{ $item->quantity }}</td>
                                </tr>
                                @endforeach
                            </tbody>    
                        </table>

                        <hr>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">

                <div class="card-body">

                    <h4 class="text-secondary text-center"> <strong>CHECKOUT DETAILS</strong> </h4>

                    <hr>

                    <div class="row container">

                        <div class="col-6">
                            Order Type: 
                        </div>

                        <div class="col-6 mb-3">
                            <strong>{{ $data[0]->order_type }}</strong> 
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
                            @if (strlen($data[0]->status == 'Pending'))
                                <span class="badge bg-warning">{{ $data[0]->status }}</span>
                            @elseif (strlen($data[0]->status == 'In Process'))
                                <span class="badge bg-primary">{{ $data[0]->status }}</span>
                            @elseif (strlen($data[0]->status == 'Ready to pick-up'))
                                <span class="badge bg-primary">{{ $data[0]->status }}</span>
                            @elseif (strlen($data[0]->status == 'Complete'))
                                <span class="badge bg-success">{{ $data[0]->status }}</span>
                            @elseif (strlen($data[0]->status == 'Rejected'))
                                <span class="badge bg-danger">{{ $data[0]->status }}</span>
                            @elseif (strlen($data[0]->status == 'Cancelled'))
                                <span class="badge bg-danger">{{ $data[0]->status }}</span>
                            @elseif (strlen($data[0]->status == 'Order Received'))
                                <span class="badge bg-success">{{ $data[0]->status }}</span>
                            @endif
                        </div>

                        <div class="col-6">
                            Total: 
                        </div>

                        <div class="col-6 mb-3">
                            ₱{{ $payment[0]->total_amount }}
                        </div>

                        <hr>

                        <div class="col text-center">
                            @if (strlen($data[0]->status == 'Pending'))
                                <form action="{{ route('order.update', $data[0]->order_number) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit" name="status" class="btn btn-danger" value="Cancelled">Cancel Order</button>
                                </form>
                            @elseif (strlen($data[0]->status == 'Ready to pick-up'))
                                <form action="{{ route('order.update', $data[0]->order_number) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit" name="status" class="btn btn-success" value="Order Received">Order Received</button>
                                </form>
                            @endif
                        </div>

                    </div>
 
                </div>
            </div>
        </div>

    </div>
    
   
@endsection