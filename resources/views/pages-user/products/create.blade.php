@extends('app')

@section('content')
<div class="row justify-content-center">

    <div class="card">
        <div class="card-body">

            <h4>Place Order</h4>

            <hr>

            <form action="{{ route('order.store', 'store') }}" method="POST">
                @csrf
                    <div class="">
        
                        <div class="pb-3">
                            <div class="col pb-2"> <h6> Order Type </h6> </div>
        
                            <div class="col"> 
        
                                {{-- <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="order_type" id="flexRadioDefault1" value="Delivery" disabled>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Deliver
                                    </label>
                                </div> --}}
        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="order_type" id="pickUp" value="Pick-up" checked>
                                    <label class="form-check-label" for="pickUp">
                                    Pick-up
                                    </label>
                                </div>
        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="order_type" id="cashOnDelivery" value="Cash On Delivery">
                                    <label class="form-check-label" for="cashOnDelivery">
                                    Cash On Delivery
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
                                            <th scope="col" class="col-4">Flavor</th>
                                            <th scope="col" class="col-4">Size</th>
                                            <th scope="col" class="col-1">Quantity</th>
                                            <th scope="col" class="col-1">Subtotal</th>
                                            <th scope="col" class="col-2"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="data_row"> 
                                        <tr>
                                            <td>
                                                <select class="" name="rows[0][product_id]" id="flavor">
                                                    @foreach ($products as $data)
                                                        <option value="{{ $data->product_id }}"> {{ $data->product_name }} </option>
                                                    @endforeach
                                                </select>
                                            </td>
        
                                            <td>
                                                @foreach ($sizes as $size)
                                                    <input class="form-check-input" type="hidden" name="rows[0][size_id]" id="sizes" value="{{ $size->id }}">
                                                    <div class="form-check form-check-inline pt-2">
                                                        <input class="form-check-input price" type="radio" name="rows[0][size]" id="sizes" value="{{ $size->price }}">
                                                        <label class="form-check-label" id="price" for="size" value="{{ $size->price }}">
                                                            {{ $size->size }} ({{ $size->price }} php)
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </td>
        
                                            <td>
                                                <input type="number" class="form-control quantity" name="rows[0][quantity]" id="quantity" min="0" max="20">
                                            </td>
        
                                            <td>
                                                <input class="form-control subtotal" type="number" name="subtotal" readonly>
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
                                            <td class="text-end"> Total Amount</td>
                                            <td>
                                                <input type="number" class="form-control total" name="total_amount" id="total_amount" readonly>
                                            </td>

                                            <td>
                                                <div id="collapseDeliveryFee">
                                                    <input type="text" class="form-control" name="deliveryFee" id="deliveryFee" value="100" disabled> 
                                                </div>
                                            </td>
                                        
                                        </tr>
                                    </tfoot>
                                    
                                    <script>
                                        document.querySelector('#collapseDeliveryFee').style.display = 'none';
                                        
                                        const pickUp = document.querySelector('#pickUp');
                                        const cashOnDelivery = document.querySelector('#cashOnDelivery');
                                        
                                        pickUp.addEventListener('click', removeDeliveryFee);
                                        cashOnDelivery.addEventListener('click', displayDeliveryFee);
            
                                        function displayDeliveryFee(){
                                            collapseDeliveryFee.style.display = 'block'; 
                                        }
            
                                        function removeDeliveryFee(){
                                            collapseDeliveryFee.style.display = 'none';
                                        }
                                    </script>
                                    
                                </table>
                            </div>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Remarks" id="remarks" name="remarks"></textarea>
                            <label for="remarks">Remarks</label>
                        </div>
        
                        <div class="col mt-3 text-center">
                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                            <button type="submit" class="btn btn-primary">Order</button>                  
                        </div>
                    </div>  
            </form>
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

        var subtotal    = $(elem).parent().parent().parent().find(".subtotal").val(cost);

        var total_amount = 0;

        $(elem).parents().parent().parent().find(".data_row").each(function(){
            total_amount += $(this).find(".subtotal").val() ? parseFloat($(this).find(".subtotal").val()) : 0;
        });

        var total       = $(elem).parent().parent().parent().parent().find(".total").val(total_amount);
    }
</script>

@endsection