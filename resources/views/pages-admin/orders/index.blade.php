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

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="true">Orders</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab" aria-controls="completed" aria-selected="false">Completed</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="cancelled-tab" data-bs-toggle="tab" data-bs-target="#cancelled" type="button" role="tab" aria-controls="cancelled" aria-selected="false">Cancelled</button>
                        </li>
                    </ul>

                    <div class="tab-content pt-3" id="myTabContent">
                        @include('pages-admin.orders.tabs.orders')
                        @include('pages-admin.orders.tabs.completed')
                        @include('pages-admin.orders.tabs.cancelled')
                    </div>

                    {{--  --}}

                </div>   
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    

    $(document).ready(function() {
        $("#order_table table tbody").on("change, keyup, click", ".price, .quantity, .cod", function(){
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