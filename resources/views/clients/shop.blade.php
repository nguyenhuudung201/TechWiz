@extends('clients.layouts.app')
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Shop</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shop Left Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-2 mb-100">
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                            <div class="showing-product-number text-right">
                                <span>Showing 7 of {{$counts}} results</span>
                            </div>
                        </li>
                        <li>
                            {{-- <a href="{{URL::current()}}"></a> --}}
                            <div class="short-by text-center">
                                <select class="nice-select">
                                    <option>Default sorting</option>
                                    <option><a href="{{URL::current()}}">Sort by popularity</a></option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="icon-grid"></i></a>
                                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="icon-menu"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                @foreach ($accessories as $accessory)
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="ltn__product-item text-center">
                                        <div class="product-img">
                                            <a href="{{URL::to('single/accessory/'.$accessory->id)}}"><img src="{{ asset('images/product/' .  $accessory->image) }} " style="max-width: 263px; height: 341px" alt="#"></a>
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="badge-1">Hot</li>
                                                </ul>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title">
                                                <a href="{{URL::to('single/accessory/'.$accessory->id)}}">{{ substr($accessory->name,0,30)}}</a>
                                            </h2>
                                            <div class="product-price">
                                                <span>${{{$accessory->price}}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach   <!--  -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">
                                
                                
                                @foreach ($accessories as $accessory)
                                <!-- ltn__product-item -->
                                <div class="col-lg-12">
                                    <div class="ltn__product-item">
                                        <div class="product-img">
                                            <a href="{{URL::to('single/accessory/'.$accessory->id)}}"><img src="{{ asset('images/product/' .  $accessory->image) }} " style="width: 390px; max-heigh:400px" alt="#"></a>
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="badge-1">Hot</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="{{URL::to('single/accessory/'.$accessory->id)}}">{{$accessory->name}}</a></h2>
                                            <div class="product-price">
                                                <span>$16</span>
                                            </div>
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-brief">
                                                <p>{{ substr($accessory->use,0,200) }}</p>
                                            </div>
                                            <div class="product-hover-action product-hover-action-2">
                                                <ul>
                                                    <li>
                                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="add-to-cart">
                                                        <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                                            <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href= "" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="icon-shuffle"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ltn__pagination-area text-center">
                    {{$accessories->links('vendor.pagination.custom')}}  
                </div>
            </div>
            <div class="col-lg-3  mb-100">
                <aside class="sidebar ltn__shop-sidebar">
                    <!-- Search Widget -->
                    <div class="widget ltn__search-widget">
                        <form action="{{ route('Accessories') }}">
                            <input type="text" name="title" placeholder="Search your keyword...">
                            <button type="submit"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <!-- Price Filter Widget -->
                    <div class="widget ltn__price-filter-widget">
                        <h4 class="ltn__widget-title">Price</h4>
                        <div class="price_filter">
                            <div class="price_slider_amount">
                                <input type="submit"  value="Your range:"/>
                                <input type="text" class="amount" name="price"  placeholder="Add Your Price" />
                            </div>
                            <div class="slider-range"></div>
                        </div>
                    </div>
                    <!-- Category Widget -->
                    <div class="widget ltn__menu-widget">
                        <h4 class="ltn__widget-title">categories</h4>
                        <ul>
                            @foreach ($types as $type)
                            <li><a href="{{ route('Accessories').'?type='.$type->id }}" >{{strtoupper($type->name)}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    
                    
                    <div class="widget ltn__banner-widget d-none">
                        <a href="shop.html"><img src="#" alt="#"></a>
                    </div>
                    
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->
@endsection