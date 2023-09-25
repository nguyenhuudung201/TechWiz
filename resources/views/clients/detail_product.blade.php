@extends('clients.layouts.app')
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Products</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ltn__shop-details-inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ltn__shop-details-img-gallery ltn__shop-details-img-gallery-2">
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    <div class="single-small-img">
                                        <img src="
                                        {{ asset('images/product/' .  $accessory->image) }}
                                        " alt="Image">
                                    </div>
                                </div>
                                <div class="ltn__shop-details-large-img">
                                    <div class="single-large-img">
                                        <a href="{{ asset('images/product/' .  $accessory->image) }}" data-rel="lightcase:myCollection">
                                            <img src="{{ asset('images/product/' .  $accessory->image) }} "alt="Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-info shop-details-info pl-0">
                                <h3>{{  substr($accessory->name,0,20)  }}</h3>
                                <div class="product-price-ratting mb-20">
                                    <ul>
                                        <li>
                                            <div class="product-price">
                                                <span>${{ $accessory->price }}</span>
                                                
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-product-brief">
                                    <p>{{ substr($accessory->use,0,250)  }}</p>
                                </div>
                                
                                <div class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                    <ul>
                                        @if(Session::has('success'))
                                        <p style="color:green;">{{ Session::get('success') }}</p>
                                        @endif
                                        
                                        @if(Session::has('errors'))
                                        @foreach($errors->all() as $error)
                                        <p style="color:red;">{{ Session::get('error') }}</p>
                                        @endforeach
                                        @endif
                                        <li>
                                            <form action="{{URL::to('addToCart')}}" method="POST">
                                                @csrf
                                                <input class="cart-plus-minus-box" type="number" min="1" name="quantity" value="1" required>
                                                <input type="hidden" name="id" value=" {{$accessory->id}}">
                                                <button type="submit" name="addToCart" class="theme-btn-1 btn btn-effect-1 d-add-to-cart">Add to cart</button>
                                            </form>
                                            {{-- <a href="#" class="theme-btn-1 btn btn-effect-1 d-add-to-cart" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                <span>ADD TO CART</span>
                                            </a> --}}
                                        </li>
                                        <li>
                                            
                                        </li>
                                        
                                        <li style="margin-left: -80px">
                                            <form action="{{URL::to('addToWatchList')}}" method="POST">
                                                @csrf
                                                
                                                <input type="hidden" name="id" value=" {{$accessory->id}}">
                                                <button type="submit" name="addToWatchList" class="btn btn-effect-1 d-add-to-wishlist"><i class="icon-heart"></i></button>
                                            </form>
                                            {{-- <a href="#" class="btn btn-effect-1 d-add-to-wishlist" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                
                                            </a> --}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media mb-30">
                                    <ul>
                                        <li class="d-meta-title">Share:</li>
                                        <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                                        <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                                        
                                    </ul>
                                </div>
                                <div class="modal-product-meta ltn__product-details-menu-1 mb-30">
                                    <ul>
                                        <li><strong>SKU:</strong> <span>12345</span></li>
                                        <li>
                                            <strong>Categories:</strong>
                                            <span>
                                                <a href="{{ route('Accessories').'?type='.$accessory->type_id }}">{{strtoupper($accessory->name_type)}}</a>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="ltn__safe-checkout d-none">
                                    <h5>Guaranteed Safe Checkout</h5>
                                    <img src="img/icons/payment-2.png" alt="Payment Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->

<!-- SHOP DETAILS TAB AREA START -->
<div class="ltn__shop-details-tab-area pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-details-tab-inner">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                            <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a>
                            <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_3" class="">Comments</a> -->
                            <a data-bs-toggle="tab" href="#liton_tab_details_1_4" class="">Shipping</a>
                            <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_5" class="">Size Chart</a> -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner text-center">
                                <p>{{$accessory->use}}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_2">
                            <div class="ltn__shop-details-tab-content-inner">
                                <div class="customer-reviews-head text-center">
                                    <h4 class="title-2">Customer Reviews</h4>
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <!-- comment-area -->
                                        <div class="ltn__comment-area mb-30">
                                            <div class="ltn__comment-inner">
                                                <ul>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <div class="product-ratting">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p></p>
                                                                <span class="ltn__comment-reply-btn">September 3, 2020</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <!-- comment-reply -->
                                        <div class="ltn__comment-reply-area ltn__form-box mb-60">
                                            <form action="#">
                                                <h4 class="title-2">Add a Review</h4>
                                                <div class="mb-30">
                                                    <div class="add-a-review">
                                                        <h6>Your Ratings:</h6>
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-item input-item-textarea ltn__custom-icon">
                                                    <textarea placeholder="Type your comments...."></textarea>
                                                </div>
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" placeholder="Type your name....">
                                                </div>
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" placeholder="Type your email....">
                                                </div>
                                                <div class="input-item input-item-website ltn__custom-icon">
                                                    <input type="text" name="website" placeholder="Type your website....">
                                                </div>
                                                <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                                <div class="btn-wrapper">
                                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_3">
                            <div class="ltn__shop-details-tab-content-inner">
                                <!-- comment-area -->
                                <div class="ltn__comment-area mb-30">
                                    <h4 class="title-2">Comments (5)</h4>
                                    <div class="ltn__comment-inner">
                                        <ul>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="img/testimonial/1.jpg" alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <span class="comment-date">20th May 2020</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="img/testimonial/3.jpg" alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <span class="comment-date">20th May 2020</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="img/testimonial/4.jpg" alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="img/testimonial/1.jpg" alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="img/testimonial/2.jpg" alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <span class="comment-date">20th May 2020</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <a href="#" class="ltn__comment-reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- comment-reply -->
                                <div class="ltn__comment-reply-area ltn__form-box mb-60">
                                    <form action="#">
                                        <h4 class="title-2">Leave a Reply</h4>
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <textarea placeholder="Type your comments...."></textarea>
                                        </div>
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" placeholder="Type your name....">
                                        </div>
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" placeholder="Type your email....">
                                        </div>
                                        <div class="input-item input-item-website ltn__custom-icon">
                                            <input type="text" name="website" placeholder="Type your website....">
                                        </div>
                                        <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                        <div class="btn-wrapper">
                                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i class="far fa-comments"></i> Post Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_4">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">Shipping policy for our store</h4>
                                
                                <ul>
                                    <li>1-2 business days (Typically by end of day)</li>
                                    <li><a href="#">30 days money back guaranty</a></li>
                                    <li>24/7 live support</li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS TAB AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">Related products</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            
            @foreach ($relateds  as $access)
            <div class="col-12">
                <div class="ltn__product-item ltn__product-item-4">
                    <div class="product-img">
                        <a href="{{URL::to('single/accessory/'.$access->id)}}"><img src="{{ asset('images/product/' .  $access->image) }}" style="max-width: 263px ; height: 342px" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">10%</li>
                            </ul>
                        </div>
                        {{-- <div class="product-hover-action product-hover-action-3">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <i class="icon-handbag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="{{URL::to('single/accessory/'.$access->id)}}">{{$access->name}}</a></h2>
                        <div class="product-price">
                            <span>${{$access->price}}</span>
                            <del>$21.00</del>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            <!--  -->
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

@endsection
