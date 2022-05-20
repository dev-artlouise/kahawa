@extends('pages-admin.app')

@section('content')

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12">
                <div class="bg-light border-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-3">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Management</li>
                        </ol>
                    </nav>      
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-header ">
    
                <h4 class="text-secondary float-start"><strong>USERS</strong></h4> 
                         
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#createUser">
                    Create
                </button>
    
                {{-- Modal Create Product --}}
                @include('pages-admin.settings.user-management.create')
     
            </div>
    
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm text-center" id="myTable">
                        <caption>List of Users</caption>
                        <thead class="">
                            <tr>
                                <th scope="col">User #</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                
                        <tbody id="tableBody">
                            <tr>
                                <td>USER-000001</td>
                                <td>Mark Valdez</td>
                                <td>Staff</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">View</a>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deactivateUser">Deactivate</button>
                                </td>
                                @include('pages-admin.settings.user-management.deactivate')
                            </tr>
                        </tbody>    
                    </table>
                </div>   
            </div>
        </div>
    </div>


@endsection