 <!-- Modal -->
 <div class="modal fade" id="createProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProductLabel">Create Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('admin.products.store', 'store')}}"enctype="multipart/form-data" id="form" method="post">
                @csrf

                <div class="modal-body">
                    <div class="container ">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder=" ">
                            <label for="name">Product Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="description" name="description" placeholder=" "></textarea>
                            <label for="description">Description</label>
                        </div>

                        <div class="form-group mb-3 ">
                            <label for="">Upload Product Image</label>
                            <input type="file" class="form-control" name="productImage" id="productImage">
                        </div>

                        <div class="form-floating">
                            <select class="form-select" id="category" name="category">
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
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>