 <!-- Modal -->
 <div class="modal fade" id="editProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formEdit" method="post">

                <div class="modal-body">
                    <div class="container ">

                        <input type="hidden" name="id" id="id">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder=" ">
                            <label for="name">Product Name</label>
                            {{-- {{$message}} --}}
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="description" placeholder=" "></textarea>
                            <label for="description">Description</label>
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="">Upload Product Image</label>
                            <input type="file" class="form-control" id="productImage">
                        </div>

                        <div class="form-floating">
                            <select class="form-select" id="category">
                              <option selected>Select a Category</option>
                              <option value="Beverages">Beverages</option>
                              <option value="Sweets">Sweets</option>
                            </select>
                            <label for="category">Works with selects</label>
                        </div>

                    </div>
                
                </div>  

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>