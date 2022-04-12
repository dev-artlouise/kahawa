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

        <div class="col-6">
            <div class="card">

                <div class="card-body">

                    <h4 class="text-secondary text-center"> <strong>CHECKOUT DETAILS</strong> </h4>

                    <hr>

                    <div class="row container">

                        {{-- if order status is in process then change oeder type and payment type fields into static fields--}}
                        
                        <div class="col-12 mt-3 mb-3">
                            <div class="form-floating">
                                <select class="form-select" name="order_type" id="floatingSelect" aria-label="Floating label select example">
                                  <option selected>Select Order Type</option>
                                  <option value="Pick-Up">Pick-Up</option>
                                  <option value="Delivery">Delivery</option>
                                </select>
                                <label for="floatingSelect">Order Type</label>
                            </div>
                        </div>

                        <div class="col-12 mt-3 mb-3">
                            <div class="form-floating">
                                <select class="form-select" name="payment_type" id="floatingSelect" aria-label="Floating label select example">
                                  <option selected>Select Payment Type</option>
                                  <option value="Cash On Delivery (COD)">Cash On Delivery (COD)</option>
                                  <option value="Online Payment">Online Payment</option>
                                </select>
                                <label for="floatingSelect">Payment Type</label>
                            </div>
                        </div>

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

                        {{-- if order status is in process then change oeder type and payment type fields into static fields --}}

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

                        <form action="">
                            <button type="submit" class="mt-2 float-end btn btn-danger btn-lg"> 
                                Cancel Order
                                {{--if In process and completed mawala ang cancel order button--}}
                                {{--notify admin na cancel order para stop na ang preparing--}}
                            </button>
                        </form>

                        {{-- if order type is pick up or delivery --}}
                        <form action="">
                            <button type="submit" class="mt-2 float-end btn btn-primary btn-lg"> 
                                Order Claimed
                            </button>
                        </form>
         
                    </div>
 
                </div>
            </div>
        </div>

    </div>
    
   
@endsection