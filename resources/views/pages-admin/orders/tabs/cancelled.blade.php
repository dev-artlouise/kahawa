<div class="tab-pane fade" id="cancelled" role="tabpanel" aria-labelledby="cancelled-tab">
    <table class="table table-sm table-hover text-center" id="myTable">
        <caption>List of Cancelled Orders</caption>
        <thead class="">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Order ID</th>
                <th scope="col">Order Date</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Order Type</th>
                <th scope="col">Payment Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $key => $data)
                @if ($data->status === ('Cancelled'))
                    <tr>
                        <td> {{ ++$key }}</td>
                        <td> {{ $data->order_number }}</td>
                        <td> {{ $data->created_at }}</td>
                        <td> <span class="badge bg-danger">{{$data->status}}</span></td>
                        <td> {{ $data->customer_name}}</td>
                        <td> {{ $data->order_type }}</td>
                        <td>  Cash </td>
                    </tr>
                @else
                    <div class="card card-body">
                        <h4>Currently no data</h4>    
                    </div>    
                @endif
            @endforeach
        </tbody>    
    </table>
</div>