<!-- Modal -->
<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createLabel"> <strong> New Order </strong> </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form action="{{ route('admin.orders.store', 'store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    {{-- <div class="container"> --}}
                        <div class="pb-3">
                            <div class="col pb-2"> <h6> Order Type </h6> </div>

                            <div class="col"> 
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" disabled>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Deliver
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    Pick-up
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="size" placeholder=" ">
                            <label for="name">Customer Name</label>
                        </div>

                        @foreach ($products as $data)
                            <div class="row gx-3 gy-2 align-items-center pb-3">

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ $data->product_name }}
                                        </label>
                                    </div>
                                </div>

                                <div class="col-6">
                                    @foreach ($sizes as $size)

                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">{{ $size->size }}</label> 
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                                
                                <div class="col-lg-2">
                                    <input type="number" class="form-control" name="quantity">
                                </div>
                            </div>
                        @endforeach


                        {{-- <table class="table border-0">
                            <thead>
                                <tr>
                                <th scope="col">Flavor</th>
                                <th scope="col">Size</th>
                                <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $data)
                                    <tr>
                                        <td scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{ $data->product_name }}
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            @foreach ($sizes as $size)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">{{ $size->size }}</label> 
                                                </div>
                                            @endforeach
                                        </td>
                                        
                                        <td class="col-2">
                                            <input type="number" class="form-control" name="quantity">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                        
                        <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Remarks"></textarea>
                    {{-- </div> --}}
                
                </div>  
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>

        </form>

      </div>
    </div>
  </div>