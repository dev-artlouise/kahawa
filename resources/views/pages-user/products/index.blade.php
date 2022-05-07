@extends('app')

@section('content')
<div class="container">
        
    <section class="featured spad">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Beverages</li>
                        <li data-filter=".fresh-meat">Sweet</li>
                    </ul>
                </div>
            </div>
        </div>

        
        <div class="row justify-content-center">
            @foreach ($data as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card m-2" style="width: 18rem;">
                        <img src="{{ asset('uploads/'.  $item->image )}}" class="img-thumbnail">
                        <div class="card-body text-center">
                            <h5 class="card-title"> <a> {{ $item->product_name }} </a> </h5>
                            
                            <div class="mt-3">
                                <button type="button" class="btn btn-outline-secondary">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            
                                {{-- <button type="button" class="btn btn-outline-danger">
                                    <i class="fa fa-heart"></i>
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="m-2 card border-dark">
                      <div class="card-body">
                          <img class="card-img-top img-thumbnail" src="{{ asset('uploads/' . $item->image) }}" alt="learning-material-image">

                            <div class="card-body">
                                <p>{{ $item->product_name }}</p>
                            </div>
                      </div>
                    </div>
                </div> --}}
            @endforeach
        </div>
    </section>

</div>
    
   
@endsection