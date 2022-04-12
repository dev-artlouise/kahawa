 <!-- Modal -->
 <div class="modal fade" id="createSizes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createSizesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createSizesLabel">Create Size/h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form" method="post">

                <div class="modal-body">
                    <div class="container ">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder=" ">
                            <label for="name">Size</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="price" placeholder=" ">
                            <label for="price">Price</label>
                        </div>

                    </div>
                
                </div>  

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
