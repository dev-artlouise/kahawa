<div class="tab-pane fade show active" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab">
    {{-- check if have active orders --}}
    <div class="list-group">
        @foreach ($data as $data)
            <div class="p-3 list-group-item">
                <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                    <div class="hstack gap-3">
                        <div class=""> <strong>{{ $data->order_number}}</strong></div>
                        {{-- <div class="">Ref No: {{$data->barangayNumber}}</div> --}}
                        <div class="vr"></div>
                    </div>
                </span> 

                <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                    <div class="hstack gap-3">
                        <div class=""> <strong> {{ Carbon\Carbon::parse($data->created_at)->format('M - d - Y') }}</strong></div>
                        <div class="vr"></div>
                    </div>
                </span>
                
            
                <div class="float-end">
                    <span class="name label label-info" style="min-width: 120px; display: inline-block;">
                        <div class="hstack gap-3">
                            <div class="">              
                                @if($data->status == 'Pending')
                                    <span class="badge bg-primary ml-3">
                                       Pending
                                    </span>
                                @elseif($data->status == 'In Process')
                                    <span class="badge bg-primary ml-3">
                                       In Process
                                    </span>
                                @elseif($data->status == 'Ready to pick-up')
                                    <span class="badge bg-primary ml-3">
                                        Ready to pick-up
                                    </span>
                                @elseif($data->status == 'Complete')
                                    <span class="badge bg-success ml-3">
                                       Completed
                                    </span>
                                @elseif($data->status == 'Reject')
                                    <span class="badge bg-danger ml-3">
                                        Rejected
                                    </span>
                                @elseif($data->status == 'Cancel')
                                    <span class="badge bg-danger ml-3">
                                        Cancelled
                                    </span> 
                                @endif
                            </div>
                            <div class="vr"></div>
                        </div>
                    </span>
                    
                    
                    <a href="{{ route('order.edit', $data->order_number)}}" class="btn btn-warning">View</a> 
                </div>
                <br>
            </div> 
        @endforeach
    </div>

</div>