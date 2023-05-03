@extends('app')

@section('content')
<div class="container">
    <div class="hero__search__form">
        <form action="{{ url('search')}}" method="GET" role="search">
            <div class="hero__search__categories">
                Search Products 
            </div>
            <input class="text-black" type="search" name="search" value="{{ Request::get('search') }}" placeholder="What do yo u need?">
        </form>
    </div>

    <section class="featured spad">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Search Result</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($product as $data)
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="" src="{{ asset('uploads/'.  $data->product_image )}}" alt="">
                                </div>

                                <div class="col-md-9">
                                    <div class="caption">
                                        <h4>{{ $data->product_name }}</h4>
                                        <p> Description: {{ $data->product_description }}</p>

                                        <hr>

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
            @empty
                <div class="col-md-12 p-2 text-center">
                    <h4> No Product Available</h4>
                </div>
            @endforelse

            
            <div class="col-md-10">
                {{ $product->appends(request()->input())->links() }}
            </div>
        </div>

    </section>
</div>    
   
@endsection