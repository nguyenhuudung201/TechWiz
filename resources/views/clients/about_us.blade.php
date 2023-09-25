@extends('clients.layouts.app')


@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">About Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6">
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

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-90 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 align-self-center">
                <div class="about-us-info-wrap">
                    <h2 class="mb-30 font-weight-6">We connect buyers and sellers with suitable, eco-friendly products</h2>
                    <p>Nothing adds more beauty and comfort to our homes and offices than the lush flowers and foliage of indoor plants. Bedrooms, bathrooms, kitchens, cubicles… There really isn’t a space a houseplant can’t enliven. Just add light and water, and you’ve got a growing indoor oasis. Bringing plants into your home is aesthetically pleasing and – amazingly – plants can offer strong health benefits as well! </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- VIDEO AREA START -->
<div class="ltn__video-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__video-bg-img ltn__video-popup-height-5 section-bg-3--- bg-image pt-170 pb-150" data-bs-bg="{{asset('clients_assets/images/bg1.jpg')}}" id="ltnr_video">
                    <a class="ltn__video-icon-1" href="https://www.youtube.com/embed/J6oDTn_ENto?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                        <i class="icon-control-play"></i>
                    </a>
                    <br>
                    <div class="ltn__video-info d-none">
                        <h1 class="white-color">APPS AWESOME VIDEO</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- VIDEO AREA END -->

<!-- TESTIMONIAL AREA START -->
<div class="testimonial-area pt-95 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">client says</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12  col-sm-12 col-xs-12">
                <!-- Testimonial Wrap -->
                <div class="ltn__testimonial-7-wrap text-center">
                    <div class="ltn__testimonial-7-image-slider">
                        <div class="testimonial-image">
                            <img src="{{asset('clients_assets/images/team11.jpg')}}" alt="Images of Testimonial"/>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{asset('clients_assets/images/team12.jpg')}}" alt="Images of Testimonial"/>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{asset('clients_assets/images/team13.jpg')}}" alt="Images of Testimonial"/>
                        </div>
                        <div class="testimonial-image">
                            <img src="{{asset('clients_assets/images/team14.jpg')}}" alt="Images of Testimonial"/>
                        </div>
                    </div>
                    <!--End Testimonial Wrap -->
                    <!--Start Testimonial Text Slider -->
                    <div class="ltn__testimonial-7-text-slider slick-arrow-1">
                        <div class="testimonial-info">
                            <p>Green thumb, black thumb, doesn’t matter
                                thanks to 102Garden Shop
                            .</p>
                            <h5>- James                            </h5>
                            <h6>Our Client</h6>
                        </div>
                        <div class="testimonial-info">
                            <p>Very happy with 102Garden Shop; plants arrived in excellent
                                condition, were healthy looking with lots of new growth and are thriving.</p>
                            <h5>-Jessica
                            </h5>
                            <h6>Our Client</h6>
                        </div>
                        <div class="testimonial-info">
                            <p>When a beautiful design is combined with powerful technology
                                is an artwork. I love how my website operates and looks
                                                                                        with this theme. Thank you for the awesome product
                                .</p>
                            <h5>-Cardi-B
                            </h5>
                            <h6>Our Client</h6>
                        </div>
                        {{-- <div class="testimonial-info">
                            <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comm consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .</p>
                            <h5>Kelian Anderson</h5>
                            <h6>Our Client</h6>
                        </div> --}}
                    </div>
                    <!--End Testimonial Text Slider -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{asset('clients_assets/images/banner10.jpg')}}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area  pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">latest news</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('clients_assets/images/blog1.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="#">Plant selection and care can help a garden endure extreme heat </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('clients_assets/images/blog2.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="#">How to be water wise in your garden this  summer </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('clients_assets/images/blog3.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="#">How you're watering the garden can help save </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('clients_assets/images/blog4.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="blog-details.html">The fastest-evolving moss in the world may not adapt to climate change </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{asset('clients_assets/images/blog5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="blog-details.html">Stressed plants make ultrasonic clicking noises </a></h3>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->
@endsection
