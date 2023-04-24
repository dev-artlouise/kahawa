<!-- Modal -->
<div class="modal fade" id="createOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createLabel"> <strong> New Order </strong> </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form action="{{ route('admin.order.store', 'store') }}" method="POST">
                @csrf
                <div class="modal-body">
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
                                    <input class="form-check-input" type="radio" name="order_type" id="Pick" value="Pick-up" checked>
                                    <label class="form-check-label" for="Pick">
                                    Pick-up
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input cod" type="radio" name="order_type" id="cod" value="Cash On Delivery">
                                    <label class="form-check-label" for="cod">
                                    Cash On Delivery
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Customer Name">
                                <label for="customer_name">Customer Name</label>
                            </div>
                        </div>
                    
                        {{-- <div class="row g-3">
                            <div class="col-md-4 col-sm-6 col-6 p-2 ">                                    
                                <label for="flavor" class="form-label">Flavor</label>
                                <select id="flavor" class="form-select">
                                    @foreach ($products as $data)
                                        <option value="{{ $data->product_id }}"> {{ $data->product_name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-6 col-6 p-2 ">
                                <fieldset class="row mb-2">
                                    <legend class="col-form-label pt-0">Size</legend>
                                </fieldset>
                                
                                @foreach ($sizes as $size)
                                    <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="order_size" id="sizes" value="{{ $size->id }}">
                                        <label class="form-check-label" for="size">
                                            {{ $size->size }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-md-1 col-sm-6 col-6 p-2 ">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantity"  placeholder="Quantity">

                            </div>

                            <div class="col-md-2 col-sm-6 col-12 p-2 mt-5">
                                <input type="button" id="btnAdd" class="btn btn-primary para" value="Add New" />
                            </div>
                        </div> --}}

                        <div class="row pt-2 pb-0">
                            <div class="col-md-12 col-sm-12 col-12 p-2" id="order_table">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Flavor</th>
                                            <th scope="col">Size</th>
                                            <th scope="col" class="col-1">Quantity</th>
                                            <th scope="col" class="col-1">Subtotal</th>
                                            <th scope="col" class="col-1">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="data_row"> 
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
                                            <td></td>
                                            <td> Total Amount
                                                <input type="number" class="form-control total" name="total_amount" id="total_amount" readonly>
                                            </td>
                                            <td></td>
                                            <td></td>
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
        </div>
      </div>
    </div>
</div>