<div class="tab-pane fade show active" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab">
    {{-- check if have active orders --}}
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
                    <div class="vr"></div>
                </div>
            </span>
            
        
            <div class="float-end">
                <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                    <div class="hstack gap-3">
                        <div class=""> <span class="badge bg-warning">Pending</span></div>
                        {{-- <div class=""> <span class="badge bg-primary">In-Process</span></div> --}}
                        <div class="vr"></div>
                    </div>
                </span>
                
                
                <a href="" class="btn btn-outline-warning btn-sm">view</a> 
            </div>
            <br>
        </div> 

        {{-- if order type is pick-up --}}
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
                    <div class="vr"></div>
                </div>
            </span>
            
        
            <div class="float-end">
                <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                    <div class="hstack gap-3">
                        <div class=""> <span class="badge bg-info">Ready for Pick-Up</span></div>
                        {{-- <div class=""> <span class="badge bg-primary">In-Process</span></div> --}}
                        <div class="vr"></div>
                    </div>
                </span>
                
                
                <a href="" class="btn btn-outline-warning btn-sm">view</a> 
            </div>
            <br>
        </div> 

        {{-- if order type is cash on delivery --}}
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
                    <div class="vr"></div>
                </div>
            </span>
            
        
            <div class="float-end">
                <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                    <div class="hstack gap-3">
                        <div class=""> <span class="badge bg-info">Out for Delivery</span></div>
                        {{-- <div class=""> <span class="badge bg-primary">In-Process</span></div> --}}
                        <div class="vr"></div>
                    </div>
                </span>
                
                
                <a href="" class="btn btn-outline-warning btn-sm">view</a> 
            </div>
            <br>
        </div> 

        {{-- else if walang active orders --}}

        <div class="p-3 list-group-item">
            <span> <strong>You Currently Have No Orders</strong> </span>
        </div>
    </div>

</div>