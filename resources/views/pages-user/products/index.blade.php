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
</section>

<div class="row justify-content-center">
    <div class="col-lg-3 col-md-4 col-sm-6">
        
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/featured/feature-1.jpg') }}">
            <div class="card-body text-center">
                <h5 class="card-title"><a href="">Product Name Here</a></h5>
                <h6>Product Price Here</h6>
                
                <div class="mt-3">
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fa fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>
    
   
@endsection