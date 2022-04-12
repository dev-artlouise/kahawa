@extends('app')

@section('content')

    <div class="card">
       
        <div class="card-body">

            <div>
                <h4 class="text-secondary text-center"> <strong>Notifications</strong></h4> 
                <hr>
            </div>

           <div class="list-group">
                {{-- if order admin rejected your order --}}
                <div class="p-3 list-group-item">

                    <span class="name label label-info" style="min-width: 90px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class=""> <strong>Your Order Order ID Product Name with Product Price is &nbsp; <span class="badge bg-danger">Rejected</span></strong></div>
                            {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                            <div class="vr"></div>
                        </div>
                    </span>

                    <div class="float-end">
                        <a href="" class="btn btn-outline-warning btn-sm">view</a> 
                    </div>
                    
                </div>    

                {{-- if order is accepted --}}
                <div class="p-3 list-group-item">

                    <span class="name label label-info" style="min-width: 90px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class=""> <strong>Your Order Order ID Product Name with Product Price is &nbsp; <span class="badge bg-primary">In-Process</span></strong></div>
                            {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                            <div class="vr"></div>
                        </div>
                    </span>

                    <div class="float-end">
                        <a href="" class="btn btn-outline-warning btn-sm">view</a> 
                    </div>
                    
                </div> 

                {{-- if order type is pickup --}}
                <div class="p-3 list-group-item">

                    <span class="name label label-info" style="min-width: 90px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class=""> <strong>Your Order Order ID Product Name with Product Price is &nbsp; <span class="badge bg-info">Ready To Pick-Up</span></strong></div>
                            {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                            <div class="vr"></div>
                        </div>
                    </span>

                    <div class="float-end">
                        <a href="" class="btn btn-outline-warning btn-sm">view</a> 
                    </div>
                    
                </div> 

                {{-- if order is accepted --}}
                <div class="p-3 list-group-item">

                    <span class="name label label-info" style="min-width: 90px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class=""> <strong>Your Order Order ID Product Name with Product Price is &nbsp; <span class="badge bg-info">Out For Delivery</span></strong></div>
                            {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                            <div class="vr"></div>
                        </div>
                    </span>

                    <div class="float-end">
                        <a href="" class="btn btn-outline-warning btn-sm">view</a> 
                    </div>
                    
                </div> 

                {{-- if customer received their order --}}
                <div class="p-3 list-group-item">

                    <span class="name label label-info" style="min-width: 90px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class=""> <strong>Your Order Order ID Product Name with Product Price is &nbsp; <span class="badge bg-success">Completed</span></strong></div>
                            {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                            <div class="vr"></div>
                        </div>
                    </span>

                    <div class="float-end">
                        <a href="" class="btn btn-outline-warning btn-sm">view</a> 
                    </div>
                    
                </div> 
           </div>

           <div class="mt-3">

                <div class="float-start">
                    <h3 class="text-secondaty">Unread <strong><u>3</u> </strong> Notifications</h3>
                </div>

                <a href="{{ route('order.create') }}" class="float-end btn btn-outline-secondary">
                   Clear All
                </a>
           </div>
          
        </div>
    </div>

@endsection