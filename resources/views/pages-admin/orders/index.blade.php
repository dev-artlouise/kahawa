@extends('pages-admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12">
                <div class="bg-light border-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-3">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Orders</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-header ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand text-secondary" href="#"> <strong> ORDERS </strong> </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

                        <form class="d-flex">
                          <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createOrder">
                                New Order
                            </button>
                        </form>

                        @include('pages-admin.orders.create')
                      </div>
                    </div>
                  </nav>
            </div>
    
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-hover text-center" id="myTable">
                        <caption>List of Products</caption>
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
                            <tr>
                                <td> {{ ++$key }}</td>
                                <td> {{ $data->order_number }}</td>
                                <td> {{ $data->created_at }}</td>
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
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    

    $(document).ready(function() {
        $("#order_table table tbody").on("keyup", ".price, .quantity", function(){
            mults(this);
        })
    }); 

    var i = 1;
    function AddOrder() {
    $("#order_table table tbody").append('<tr class="data_row" id="rows'+i+'">' +
                                            '<td>' +       
                                                '<select class="form-select" name="rows['+i+'][product_id]" id="flavor">' +
                                                    '@foreach ($products as $data)' +
                                                    '<option value="{{ $data->product_id }}"> {{ $data->product_name }} </option>' +
                                                    '@endforeach' +
                                                '</select>' + 
                                            '</td>' +

                                            '<td>' +
                                                '@foreach ($sizes as $size)' +
                                                '<input class="form-check-input" type="hidden" name="rows['+i+'][size_id]" id="sizes" value="{{ $size->id }}">' +
                                                    '<div class="form-check form-check-inline pt-2">' +
                                                        '<input class="form-check-input price" type="radio" name="rows['+i+'][size]" id="sizes" value="{{ $size->price }}">' +
                                                        '<label class="form-check-label" id="price" for="size" value="{{ $size->id }}">' +
                                                            '{{ $size->size }} ({{ $size->price }} php)' +
                                                        '</label>' +
                                                    '</div>' +
                                                '@endforeach'+
                                            '</td>' +
                                    
                                            '<td>' +
                                                '<input class="form-control quantity" type="number" name="rows['+i+'][quantity]" id="quantity">' +
                                            '</td>' +

                                            '<td>' +
                                                '<input class="form-control subtotal" type="number" name="subtotal" readonly>' +
                                            '</td>' +
                                            
                                            '<td class="td-actions">' +
                                                '<span class="btn btn-danger remove_data" name="remove" id="'+i+'"> x Remove</span>' +
                                            '</td>' +
                                         '</tr>');
    i++;
    
    $(document).on('click', '.remove_data', function() {
      var btnID = $(this).attr("id");
      $('#rows'+btnID+'').remove();
    });
  }

    function mults(elem) {
    var i = 0
    var quantity    = $(elem).parent().parent().parent().find(".quantity").val();
    var price       = $(elem).parent().parent().parent().find('input[name="rows['+i+'][size]"]:checked').val();

    var cost        = quantity * price

    var subtotal       = $(elem).parent().parent().parent().find(".subtotal").val(cost);

    var total_amount = 0;
    $(elem).parents().parent().parent().find(".data_row").each(function(){
        total_amount += $(this).find(".subtotal").val() ? parseFloat($(this).find(".subtotal").val()) : 0;
    });

    var total       = $(elem).parent().parent().parent().parent().find(".total").val(total_amount);
    console.log(total_amount)
  }

</script>
@endsection