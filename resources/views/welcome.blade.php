@extends('app')

@section('content')
 <!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        {{-- <div class="row"> --}}
            {{-- <div class="col-lg-12"> --}}
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ url('search')}}" method="GET" role="search">
                            <div class="hero__search__categories">
                                Search Products
                            </div>
                            <input class="text-black" type="search" name="search" value="" placeholder="What do yo u need?">    
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>Contact Number</h5>
                            <span>09457698770</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="img/hero/banner4.jpg">
                    <div class="hero__text ">
                        <span class="text-white mb">KAHAWA</span>
                        <h2 class="text-white">COFFEE PANALO</h2>
                        <p class="text-white">Free pickup and delivery available</p>
                        <a href="{{ route('order.create')}}" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</section>


<section class="featured spad">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2>Featured Product</h2>
            </div>
            <div class="featured__controls">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    {{-- <li data-filter=".oranges">Beverages</li>
                    <li data-filter=".fresh-meat">Sweet</li> --}}
                </ul>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" id="product">
        @foreach($products as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="thumbnail">
                            <img src="{{ asset('uploads/'.  $product->product_image )}}" alt="">
                            <div class="caption">
                                <h4>{{ $product->product_name }}</h4>
                                <p>{{ $product->product_description }}</p>
                                <div class="text-center">
                                    <p class="btn-holder">
                                        <a href="{{ route('products.create') }}" class="btn btn-warning btn-block text-center" role="button">
                                            <i class="fa fa-shopping-cart"></i>  Order Now
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="row justify-content-center">
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
    </div> --}}
    
</section>
<!-- Hero Section End -->
@endsection