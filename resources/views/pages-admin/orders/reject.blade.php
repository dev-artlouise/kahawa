 <!-- Modal -->
 <div class="modal fade" id="rejectOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="rejectOrderLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rejectOrderLabel">Reject Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('admin.order.update', $data[0]->order_number) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="container ">

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="remarks" name="remarks" placeholder=" "></textarea>
                            <label for="remarks">Remarks</label>
                        </div>
  
                    </div>
                
                </div>  

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>