<div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
    <table class="table table-sm table-hover text-center" id="myTable2">
        <caption>List of Completed Orders</caption>
        <thead class="">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Order ID</th>
                <th scope="col">Order Date</th>
                <th scope="col">Status</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Order Type</th>
                <th scope="col">Payment Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $key => $data)
                @if ($data->status == 'Completed')
                    <tr>
                        <td> {{ ++$key }}</td>
                        <td> {{ $data->order_number }}</td>
                        <td> {{ $data->created_at }}</td>
                        <td> <span class="badge bg-success">{{$data->status}}</span></td>
                        <td> {{ $data->customer_name}}</td>
                        <td> {{ $data->order_type }}</td>
                        <td>  Cash </td>
                    </tr>
                @elseif ($data->status == 'Order Received')
                    <tr>
                        <td> {{ ++$key }}</td>
                        <td> {{ $data->order_number }}</td>
                        <td> {{ $data->created_at }}</td>
                        <td> <span class="badge bg-success">{{$data->status}}</span></td>
                        <td> {{ $data->customer_name}}</td>
                        <td> {{ $data->order_type }}</td>
                        <td>  Cash </td>
                    </tr>
                @endif
            @endforeach
        </tbody>    
    </table>
</div>