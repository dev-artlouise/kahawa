@extends('pages-admin.app')

@section('content')

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12">
                <div class="bg-light border-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-3">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Size</li>
                        </ol>
                    </nav>      
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-header ">
    
                <h4 class="text-secondary float-start"><strong>SIZES</strong></h4> 
                         
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#createSizes">
                    Create
                </button>
    
                {{-- Modal Create Product --}}
                @include('pages-admin.settings.sizes.create')
     
            </div>
    
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-hover text-center" id="myTable">
                        <caption>List of Sizes</caption>
                        <thead class="">
                            <tr>   
                                <th scope="col">Size#</th>
                                <th scope="col">Size</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                
                        <tbody id="tableBody">
                            @foreach ($data as $size)
                                <tr>
                                    <td>{{ $size->id }}</td>
                                    <td>{{ $size->size }}</td>
                                    <td>{{ $size->price }}</td>
                                    <td>
                                        {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editSize"> --}}
                                        {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editSize">
                                            Edit
                                        </button> --}}
                                        <div class="d-flex justify-content-center">
                                            <a role="button" href="{{ route('admin.size.edit', $size->id) }}" class="btn btn-primary btn-sm me-2 ">Edit</a>
                                            <form action="{{ route('admin.size.destroy', $size->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>

                                        
                                        {{-- <a href="{{ route('admin.size.destroy', $size->id) }}" class="btn btn-danger"></a> --}}


                                        {{-- @include('pages-admin.settings.sizes.edit') --}}

                                        {{-- <button class="btn btn-danger">
                                            Delete
                                        </button> --}}
                                    </td>
                                </tr> 
                            @endforeach
                        </tbody>    
                    </table>
                </div>   
            </div>
        </div>
    </div>


@endsection