 <!-- Modal -->
 <div class="modal fade" id="createUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserLabel">Create Size</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form" method="post">

                <div class="modal-body">
                    <div class="container ">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="firstName" placeholder=" ">
                            <label for="firstName">First Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lastName" placeholder=" ">
                            <label for="lastName">Last Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="middleName" placeholder=" ">
                            <label for="middleName">Middle Name</label>
                        </div>

                        {{-- Select input for role --}}

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
