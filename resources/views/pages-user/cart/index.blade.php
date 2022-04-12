@extends('app')

@section('content')
    
    <div class="card">
       
        <div class="card-body">

            <div>
                <h4 class="text-secondary text-center"> <strong> My Cart </strong></h4> 
                <hr>
            </div>

           <div class="list-group">
               <div class="p-3 list-group-item">
                    <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class=""> <strong>Product Image</strong></div>
                            {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                            <div class="vr"></div>
                        </div>
                    </span> 

                    <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class=""> <strong>Product Name</strong></div>
                            {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                            <div class="vr"></div>
                        </div>
                    </span>

                    <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class=""> <strong>Product Price</strong></div>
                            {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                            <div class="vr"></div>
                        </div>
                    </span>
                    
                    
                    <div class="float-end">
                        <button class="btn btn-outline-danger btn-sm">Remove</button> 
                    </div>

                </div> 
           </div>

           <div class="mt-3">

                <div class="float-start">
                    <h3 class="text-secondaty">TOTAL: P<strong><u>400<u></strong> </h3>
                </div>

                <a href="{{ route('order.create') }}" class="float-end btn btn-secondary btn-lg">
                    Check Out
                </a>
           </div>
          
        </div>
    </div>

@endsection