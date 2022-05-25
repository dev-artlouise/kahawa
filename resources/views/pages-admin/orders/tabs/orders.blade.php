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

                @if ($data->status === 'Completed')
                    <td> <span class="badge bg-success"></span> Completed</td>
                @elseif($data->status === 'Cancelled')
                    <td> <span class="badge bg-danger"></span> Cancelled</td>
                @else
                    <td><span class="badge bg-success"></span>Pending</td>
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
