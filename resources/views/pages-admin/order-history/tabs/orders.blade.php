<div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
    <table class="table table-sm table-hover text-center" id="myTable">
        <caption>List of Orders</caption>
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
            <tr>
                <td> {{ ++$key }}</td>
                <td> {{ $data->order_number }}</td>
                <td> {{ $data->created_at }}</td>

                @if ($data->status === 'Completed' || $data->status === 'Complete')
                    <td> <span class="badge bg-success">Completed</span></td>
                @elseif ($data->status === 'Cancelled')
                    <td> <span class="badge bg-danger">Cancelled</span></td>
                @elseif ($data->status === 'Rejected')
                    <td> <span class="badge bg-danger">Rejected</span> </td>
                @elseif ($data->status === 'Pending')
                    <td><span class="badge bg-warning">Pending</span></td>
                @elseif ($data->status === 'In Process')
                    <td><span class="badge bg-primary">In Process</span></td>
                @elseif ($data->status === 'Order Received')
                    <td><span class="badge bg-success">Order Received </span>
                @elseif ($data->status === 'Ready to pick-up')
                    <td><span class="badge bg-primary">Ready to pick-up</span></td></td>
                @endif

                <td> {{ $data->customer_name}}</td>
                <td> {{ $data->order_type }}</td>
                <td>  Cash </td>
                <td>
                    <a href="{{ route('admin.order.edit', $data->order_number) }}" class="btn btn-warning btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>
