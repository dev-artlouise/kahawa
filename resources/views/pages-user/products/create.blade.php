@extends('app')

@section('content')
<form action="{{ route('order.store', 'store') }}" method="POST">
    @csrf
        <div class="container-fluid">
            <div class="pb-3">
                <div class="col pb-2"> <h6> Order Type </h6> </div>

                <div class="col"> 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="order_type" id="flexRadioDefault1" value="Delivery" disabled>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Deliver
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="order_type" id="flexRadioDefault2" value="Pick-up" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Pick-up
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-floating mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Customer Name" value="{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}"  readonly>
                    <label for="customer_name">Customer Name</label>
                </div>
            </div>

            <div class="row pt-2 pb-0">
                <div class="col-md-12 col-sm-12 col-12 p-2" id="order_table">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="col-5">Flavor</th>
                                <th scope="col" class="col-4">Size</th>
                                <th scope="col" class="col-1">Quantity</th>
                                <th scope="col" class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>
                                    <select class="form-select" name="rows[0][product_id]" id="flavor">
                                        @foreach ($products as $data)
                                            <option value="{{ $data->product_id }}"> {{ $data->product_name }} </option>
                                        @endforeach
                                    </select>
                                </td>

                                <td>
                                    @foreach ($sizes as $size)
                                        <div class="form-check form-check-inline pt-2">
                                            <input class="form-check-input" type="radio" name="rows[0][size_id]" id="sizes" value="{{ $size->id }}">
                                            <label class="form-check-label" for="size">
                                                {{ $size->size }} ({{ $size->price }} php)
                                            </label>
                                        </div>
                                    @endforeach
                                </td>

                                <td>
                                    <input type="number" class="form-control" name="rows[0][quantity]" id="quantity">
                                </td>

                                <td>
                                    <button class="btn btn-success" type="button" onclick="AddOrder()"> 
                                        + Add Order
                                      </button> 
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td class="float-end mt-3">Total Amount : </td>
                                <td> 
                                    <input type="number" class="form-control" name="total_amount" id="total_amount">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            
            <div class="form-floating pt-3">
                <textarea class="form-control" placeholder="Remarks" id="remarks" name="remarks"></textarea>
                <label for="remarks">Remarks</label>
            </div>

            <div class="col mt-3 text-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>                  
            </div>
        </div>  
</form>
@endsection


@section('js')
<script>
var i = 1;
  function AddOrder() {
    $("#order_table table tbody").append('<tr id="rows'+i+'">' +
                                            '<td>' +       
                                                '<select class="form-select" name="rows['+i+'][product_id]" id="flavor">' +
                                                    '@foreach ($products as $data)' +
                                                    '<option value="{{ $data->product_id }}"> {{ $data->product_name }} </option>' +
                                                    '@endforeach' +
                                                '</select>' + 
                                            '</td>' +

                                            '<td>' +
                                                '@foreach ($sizes as $size)' +
                                                    '<div class="form-check form-check-inline pt-2">' +
                                                        '<input class="form-check-input" type="radio" name="rows['+i+'][size_id]" id="sizes" value="{{ $size->id }}">' +
                                                        '<label class="form-check-label" for="size">' +
                                                            '{{ $size->size }} ({{ $size->price }} php)' +
                                                        '</label>' +
                                                    '</div>' +
                                                '@endforeach'+
                                            '</td>' +
                                    
                                            '<td>' +
                                                '<input class="form-control" type="number" name="rows['+i+'][quantity]" id="quantity">' +
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

    $(document).ready(function() {
            $('table thead th').each(function(i) {
                calculateColumn(i);
            });
    });

    function calculateColumn(index) {
        var total = 0;

        $('table tr #quantity').each(function() {
            var value = parseInt($('#quantity', this).eq(index).text());
            if (!isNaN(value)) {
                total += value;
            }
        });
        $('.total_amount').eq(index).text(total);
    }
</script>
@endsection