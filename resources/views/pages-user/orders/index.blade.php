@extends('app')

@section('content')
    <div class="card">
        <div class="container">
            <div class="card-body">
                
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-orders-tab" data-bs-toggle="tab" data-bs-target="#nav-orders" type="button" role="tab" aria-controls="nav-orders" aria-selected="true">Orders</button>
                      <button class="nav-link" id="nav-order-history-tab" data-bs-toggle="tab" data-bs-target="#nav-order-history" type="button" role="tab" aria-controls="nav-order-history" aria-selected="false">Order History</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    @include('pages-user.orders.tabs.orders')
                    @include('pages-user.orders.tabs.history')
                </div>

            </div>
        </div>
    </div>
        

@endsection