@extends('pages-admin.app')

@section('content')

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12">
                <div class="bg-light border-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-3">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>      
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-header ">
    
                <h4 class="text-secondary float-start"><strong>PRODUCTS</strong></h4> 
                         
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#createProduct">
                    Create
                </button>

                                

                {{-- Modal Create Product --}}
                @include('pages-admin.settings.products.create')
                @include('pages-admin.settings.products.edit')
     
            </div>
    
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-hover text-center" id="myTable">
                        <caption>List of Products</caption>
                        <thead class="">
                            <tr>
                                <th scope="col">#</th>
                                <td scope="col">Image</td>
                                <th scope="col">Product Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                
                        <tbody id="">
                            @foreach ($data as $key => $product)
                                <tr>
                                    <td> {{ ++$key }} </td>
                                    <td> <img src="{{ asset('uploads/'. $product->product_image )}}" alt="product image" height="50" width="50"> </td>
                                    <td> {{ $product->product_name }}</td>
                                    <td> {{ $product->category_name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a role="button" href="#" class="btn btn-primary btn-sm me-2 ">Edit</a>

                                            <form action="{{ route('admin.products.destroy', $product->product_id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
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