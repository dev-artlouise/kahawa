@extends('pages-user.layouts.app')

@section('content')
   
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{asset('img/product/product-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>Product Name</h3>
                        {{-- <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div> --}}
                        <div class="product__details__price"><span>&#8369;</span>50.00</div>

                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                            vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                            quam vehicula elementum sed sit amet dui. Proin eget tortor risus.
                        </p>

                        

                        <form action="">
                            <div class="col-3 form-floating mb-3">
                                <input type="number" name="quantity" class="form-control" id="quantity" placeholder=" ">
                                <label for="quantity">Quantity</label>
                            </div>
    
                            <div class="row">
                                
                            </div>

                            <button class="btn btn-outline-secondary">
                                ADD TO CARD
                            </button>

                            <br>

                            <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i> 
                            </button>

                            <span class="text-danger">Likes(3)</span>
                            
                        </form>
                        
                        {{-- <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Reviews</h6>
                                    <div class="container">
                                        <div id="reviews" class="review-section">
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <h4 class="m-0">37 Reviews</h4>
                                                {{-- <select class="custom-select custom-select-sm border-0 shadow-sm ml-2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="3">Most Relevant</option>
                                                    <option>Most Recent</option>
                                                </select> --}}
                                                {{-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 188px;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-qd66-container">
                                                            <span class="select2-selection__rendered" id="select2-qd66-container" role="textbox" aria-readonly="true" title="Most Relevant">Most Relevant</span>
                                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span> --}}
                                            </div>
                                            {{-- <div class="row">
                                                <div class="col-md-6">
                                                    <table class="stars-counters">
                                                        <tbody>
                                                            <tr class="">
                                                                <td>
                                                                    <span>
                                                                        <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5 Stars</button>
                                                                    </span>
                                                                </td>
                                                                <td class="progress-bar-container">
                                                                    <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                                        <div class="fit-progressbar-background">
                                                                            <span class="progress-fill" style="width: 97.2973%;"></span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="star-num">(36)</td>
                                                            </tr>
                                                            <tr class="">
                                                                <td>
                                                                    <span>
                                                                        <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5 Stars</button>
                                                                    </span>
                                                                </td>
                                                                <td class="progress-bar-container">
                                                                    <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                                        <div class="fit-progressbar-background">
                                                                            <span class="progress-fill" style="width: 2.2973%;"></span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="star-num">(2)</td>
                                                            </tr>
                                                            <tr class="">
                                                                <td>
                                                                    <span>
                                                                        <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5 Stars</button>
                                                                    </span>
                                                                </td>
                                                                <td class="progress-bar-container">
                                                                    <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                                        <div class="fit-progressbar-background">
                                                                            <span class="progress-fill" style="width: 0;"></span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="star-num">(0)</td>
                                                            </tr>
                                                            <tr class="">
                                                                <td>
                                                                    <span>
                                                                        <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5 Stars</button>
                                                                    </span>
                                                                </td>
                                                                <td class="progress-bar-container">
                                                                    <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                                        <div class="fit-progressbar-background">
                                                                            <span class="progress-fill" style="width: 0;"></span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="star-num">(0)</td>
                                                            </tr>
                                                            <tr class="">
                                                                <td>
                                                                    <span>
                                                                        <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5 Stars</button>
                                                                    </span>
                                                                </td>
                                                                <td class="progress-bar-container">
                                                                    <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                                        <div class="fit-progressbar-background">
                                                                            <span class="progress-fill" style="width: 0;"></span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="star-num">(0)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="ranking">
                                                        <h6 class="text-display-7">Rating Breakdown</h6>
                                                        <ul>
                                                            <li>
                                                                Seller communication level<span>5<span class="review-star rate-10 show-one"></span></span>
                                                            </li>
                                                            <li>
                                                                Recommend to a friend<span>5<span class="review-star rate-10 show-one"></span></span>
                                                            </li>
                                                            <li>
                                                                Service as described<span>4.9<span class="review-star rate-10 show-one"></span></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    
                                        <div class="review-list">
                                            <ul>
                                                <li>
                                                    <div class="d-flex">
                                                        {{-- Customer Review --}}
                                                        <div class="left">
                                                            <span>
                                                                <img src="{{ asset('img/default-avatar.jpg') }}" class="profile-pict-img img-fluid" alt="" />
                                                            </span>
                                                        </div>

                                                        
                                                        <div class="right">
                                                            <h4>
                                                                Customer Name Here
                                                                {{-- <span class="gig-rating text-body-2">
                                                                    <img src="" width="15" height="15">   
                                                                    5.0
                                                                </span> --}}
                                                            </h4>
                                                            <div class="review-description">
                                                                <p>
                                                                   comment review here
                                                                </p>
                                                            </div>
                                                            <span class="publish py-3 d-inline-block w-100">posted on </span>

                                                            <hr>

                                                            {{-- Admin Reply --}}
                                                            <div class="response-item mt-4 d-flex">
                                                                <div class="left">
                                                                    <span>
                                                                        <img src="{{ asset('img/default-avatar.jpg') }}" class="profile-pict-img img-fluid" alt="" />
                                                                    </span>
                                                                </div>
                                                                <div class="right">
                                                                    <h4>
                                                                        Kahawa Admin
                                                                    </h4>
                                                                    <div class="review-description">
                                                                        <p>
                                                                            Thank your for your great review
                                                                        </p>
                                                                    </div>
                                                                    <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

@endsection