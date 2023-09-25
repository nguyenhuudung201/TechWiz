@extends('clients.layouts.app')


@section('content')
<div class="ltn__slider-area ltn__slider-3 ltn__slider-6 plr--5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="ltn__slide-two-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white--">
          <!-- ltn__slide-item  -->
          <div class="ltn__slide-item ltn__slide-item-8 ltn__slide-item-9 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="{{asset('clients_assets/images/slider3.jpg')}}">
            <div class="ltn__slide-item-inner">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 align-self-center">
                    <div class="slide-item-info">
                      <div class="slide-item-info-inner ltn__slide-animation">
                        <div class="slide-item-info">
                          <div class="slide-item-info-inner ltn__slide-animation">
                            <h6 class="slide-sub-title ltn__secondary-color slide-title-line-2 animated">Flower & Gift</h6>
                            <h1 class="slide-title animated ">Get Up To 75%</h1>
                            <div class="slide-brief animated">
                              <p>Thank you for your visit.</p>
                            </div>
                            <div class="btn-wrapper animated">
                              <a href="{{ route('Accessories') }}" class="theme-btn-1 btn btn-round">Shop Now</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="slide-item-img"><img src="{{asset('clients_assets/images/product8.png')}}slider/41-1.png" alt="#"><span class="call-to-circle-1"></span></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ltn__slide-item  -->
          <div class="ltn__slide-item ltn__slide-item-8 ltn__slide-item-9 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="{{asset('clients_assets/images/slider1.jpg')}}">
            <div class="ltn__slide-item-inner">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 align-self-center">
                    <div class="slide-item-info">
                      <div class="slide-item-info-inner ltn__slide-animation">
                        <div class="slide-item-info">
                          <div class="slide-item-info-inner ltn__slide-animation">
                            <h6 class="slide-sub-title ltn__secondary-color slide-title-line-2 animated">Flower & Gift</h6>
                            <h1 class="slide-title animated ">Get Up To 75%</h1>
                            <div class="slide-brief animated">
                              <p>Happiness is the seed Happiness shared is the flower
                                .</p>
                              </div>
                              <div class="btn-wrapper animated">
                                <a href="{{ route('Accessories') }}" class="theme-btn-1 btn btn-round">Shop Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="slide-item-img"><img src="{{asset('clients_assets/images/product8.png')}}slider/41-1.png" alt="#"><span class="call-to-circle-1"></span></div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--  -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SLIDER AREA END -->
  <!-- BANNER AREA START -->
  <div class="ltn__banner-area  plr--5 mt-40">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="ltn__banner-item">
            <div class="ltn__banner-img">
              <a href="shop.html">
                <img src="{{asset('clients_assets/images/banner1.jpg')}}" alt="Banner Image">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="ltn__banner-item">
            <div class="ltn__banner-img">
              <a href="shop.html">
                <img src="{{asset('clients_assets/images/banner2.jpg')}}" alt="Banner Image">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="ltn__banner-item">
            <div class="ltn__banner-img">
              <a href="shop.html">
                <img src="{{asset('clients_assets/images/banner3.jpg')}}" alt="Banner Image">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="ltn__banner-item">
            <div class="ltn__banner-img">
              <a href="shop.html">
                <img src="{{asset('clients_assets/images/banner4.jpg')}}" alt="Banner Image">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BANNER AREA END -->
  <!-- PRODUCT TAB AREA START (product-item-3) -->
  <div class="ltn__product-tab-area ltn__product-gutter  pt-65 pb-40">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase text-center">
            <div class="nav">
              <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_1">new arrival</a>
              <a data-bs-toggle="tab" href="#liton_tab_3_2" class="">top sales</a>
              <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">off sales</a>
            </div>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade active show" id="liton_tab_3_1">
              <div class="ltn__product-tab-content-inner">
                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                  <!-- ltn__product-item -->
                  @foreach ($news as $item)
                  <div class="col-12">
                    <div class="ltn__product-item ltn__product-item-4">
                      <div class="product-img">
                        <a href="product-details.html">
                          <img src="{{ asset('images/product/' .  $item->image) }}" style="height:374px" alt="#">
                        </a>
                        <div class="product-badge">
                          <ul>
                            <li class="badge-2">10%</li>
                          </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-3">
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
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="product-ratting">
                          <ul>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <h2 class="product-title">
                          <a href="{{URL::to('single/accessory/'.$item->id)}}">{{$item->name}}</a>
                        </h2>
                        <div class="product-price">
                          <span>${{$item->price}}</span>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  
                  
                  <!--  -->
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="liton_tab_3_2">
              <div class="ltn__product-tab-content-inner">
                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                  
                  @foreach ($tops as $item)
                  <div class="col-12">
                    <div class="ltn__product-item ltn__product-item-4">
                      <div class="product-img">
                        <a href="product-details.html">
                          <img src="{{ asset('images/product/' .  $item->image) }}" style="height:374px" alt="#">
                        </a>
                        <div class="product-badge">
                          <ul>
                            <li class="badge-2">10%</li>
                          </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-3">
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
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="product-ratting">
                          <ul>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <h2 class="product-title">
                          <a href="{{URL::to('single/accessory/'.$item->id)}}">{{$item->name}}</a>
                        </h2>
                        <div class="product-price">
                          <span>${{$item->price}}</span>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="liton_tab_3_3">
              <div class="ltn__product-tab-content-inner">
                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                  <!-- ltn__product-item -->
                  @foreach ($sales as $item)
                  <div class="col-12">
                    <div class="ltn__product-item ltn__product-item-4">
                      <div class="product-img">
                        <a href="product-details.html">
                          <img src="{{ asset('images/product/' .  $item->image) }}" style="height:374px" alt="#">
                        </a>
                        <div class="product-badge">
                          <ul>
                            <li class="badge-2">10%</li>
                          </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-3">
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
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="product-ratting">
                          <ul>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <i class="icon-star"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <h2 class="product-title">
                          <a href="{{URL::to('single/accessory/'.$item->id)}}">{{$item->name}}</a>
                        </h2>
                        <div class="product-price">
                          <span>${{$item->price}}</span>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- PRODUCT TAB AREA END -->
<!-- BANNER AREA START -->
<div class="ltn__banner-area ">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="ltn__banner-item">
          <div class="ltn__banner-img">
            <a href="shop.html">
              <img src="{{asset('clients_assets/images/banner8.jpg')}}" alt="Banner Image">
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="ltn__banner-item">
          <div class="ltn__banner-img">
            <a href="shop.html">
              <img src="{{asset('clients_assets/images/banner9.jpg')}}" alt="Banner Image">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- BANNER AREA END -->
<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter  pt-60 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title-area text-center">
          <h1 class="section-title section-title-border">top products</h1>
        </div>
      </div>
    </div>
    <div class="row ltn__product-slider-item-four-active slick-arrow-1">
      <!-- ltn__product-item -->
      
      @foreach ($top_products as $item)
      <div class="col-12">
        <div class="ltn__product-item ltn__product-item-4">
          <div class="product-img">
            <a href="product-details.html">
              <img src="{{ asset('images/product/' .  $item->image) }}" style="height:374px" alt="#">
            </a>
            <div class="product-badge">
              <ul>
                <li class="badge-2">10%</li>
              </ul>
            </div>
            <div class="product-hover-action product-hover-action-3">
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
            </div>
          </div>
          <div class="product-info">
            <div class="product-ratting">
              <ul>
                <li>
                  <a href="#">
                    <i class="icon-star"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-star"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-star"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-star"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-star"></i>
                  </a>
                </li>
              </ul>
            </div>
            <h2 class="product-title">
              <a href="{{URL::to('single/accessory/'.$item->id)}}">{{$item->name}}</a>
            </h2>
            <div class="product-price">
              <span>${{$item->price}}</span>
              
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- ltn__product-item -->
      
      <!--  -->
    </div>
  </div>
</div>
<!-- PRODUCT SLIDER AREA END -->
<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area mb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2  ltn__border section-bg-6">
          <div class="ltn__feature-item ltn__feature-item-8">
            <div class="ltn__feature-icon">
              <img src="{{asset('clients_assets/images/8-trolley.svg')}}" alt="#">
            </div>
            <div class="ltn__feature-info">
              <h4>Free shipping</h4>
              <p>On all orders over $49.00</p>
            </div>
          </div>
          <div class="ltn__feature-item ltn__feature-item-8">
            <div class="ltn__feature-icon">
              <img src="{{asset('clients_assets/images/9-money.svg')}}" alt="#">
            </div>
            <div class="ltn__feature-info">
              <h4>15 days returns</h4>
              <p>Moneyback guarantee</p>
            </div>
          </div>
          <div class="ltn__feature-item ltn__feature-item-8">
            <div class="ltn__feature-icon">
              <img src="{{asset('clients_assets/images/10-credit-card.svg')}}" alt="#">
            </div>
            <div class="ltn__feature-info">
              <h4>Secure checkout</h4>
              <p>Protected by Paypal</p>
            </div>
          </div>
          <div class="ltn__feature-item ltn__feature-item-8">
            <div class="ltn__feature-icon">
              <img src="{{asset('clients_assets/images/11-gift-card.svg')}}" alt="#">
            </div>
            <div class="ltn__feature-info">
              <h4>Offer & gift here</h4>
              <p>On all orders over</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FEATURE AREA END -->

@endsection
