 <!-- Modal -->
 <div class="modal fade" id="deactivateUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deactivateUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="deactivateUserLabel"> <strong>Are you Sure you Want to Deactivate this user ?</strong> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="#" method="post">
                @csrf

                <div class="modal-body">
                    <div class="container ">

                        <div class="row">
                            <div class="col-6">
                                User ID:
                            </div>
                            <div class="col-6">
                                USER-000001
                            </div>
                            <div class="col-6">
                                Name:
                            </div>
                            <div class="col-6">
                                Art Sambrano
                            </div>
                            <div class="col-6">
                                Role:
                            </div>
                            <div class="col-6">
                                Staff
                            </div>
                        </div>
  
                    </div>
                
                </div>  

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Deactivate User</button>
                </div>
            </form>

        </div>
    </div>
</div>