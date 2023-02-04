@extends('website.master')

@section('title')
    Popular Eccomerce Website in Bangladesh
@endsection

@section('body')
    <!-- start of .main -->
    <main class="main">
        <div class="page-content">
            <section class="intro-section">
                <div class="intro-slider swiper-container swiper-theme animation-slider" data-swiper-options = "{
                        'slidesPerView': 1,
                        'autoplay': {
                            'delay': 8000,
                            'disableOnInteraction': false
                        }
                    }">
                    <div class="swiper-wrapper row cols-1 gutter-no">
                        <div  class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                              style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/slides/slide-1.jpg); background-color: #EEEDEB;">
                            <div class="container">
                                <div class="banner-content d-inline-block y-50">
                                    <div class="slide-animate" data-animation-options="{
                                            'name': 'fadeInUpShorter', 'duration': '1s'
                                        }">
                                        <h5 class="banner-subtitle text-uppercase font-weight-bold">
                                            Performance &amp; Lifestyle
                                        </h5>
                                        <h3 class="banner-title ls-25 mb-6">
                                            <span class="text-primary">Introducing</span>
                                            Fashion lifestyle collection
                                        </h3>
                                        <a href="shop-banner-sidebar.html"
                                           class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Intro Slide 1 -->
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                             style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/slides/slide-2.jpg); background-color: #A9A9A9;">
                            <div class="container text-right">
                                <div class="banner-content y-50 d-inline-block">
                                    <div class="slide-animate" data-animation-options="{
                                            'name': 'zoomIn', 'duration': '1s'
                                        }">
                                        <h5 class="banner-subtitle text-uppercase font-weight-bold ls-25 mb-0">
                                            Up To <strong class="text-primary text-capitalize">30% Off</strong>
                                        </h5>
                                        <h3 class="banner-title text-white text-uppercase ls-25">Calisthenics</h3>
                                        <div class="banner-price-info text-white">Start at $125.00</div>
                                        <a href="shop-banner-sidebar.html"
                                           class="btn btn-white btn-outline btn-rounded btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Intro Slide 2 -->
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                             style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/slides/slide-3.jpg); background-color: #F3F3F3;">
                            <div class="container">
                                <div class="banner-content y-50 d-inline-block">
                                    <div class="slide-animate" data-animation-options="{
                                            'name': 'fadeInDownShorter', 'duration': '1s'
                                        }">
                                        <h5 class="banner-subtitle text-uppercase text-primary font-weight-bold mb-1">
                                            From Online Store
                                        </h5>
                                        <h3 class="banner-title text-uppercase ls-25">Sprimgchic</h3>
                                        <h4 class="ls-25 mb-0">Recommend</h4>
                                        <p class="ls-25">Free shipping on all orders over <span
                                                class="text-dark">$99.00</span></p>
                                        <a href="shop-banner-sidebar.html"
                                           class="btn btn-dark btn-rounded btn-outline btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Intro Slide 3 -->
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                             style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/slides/slide-1.jpg); background-color: #EEEDEB;">
                            <div class="container">
                                <div class="banner-content d-inline-block y-50">
                                    <div class="slide-animate" data-animation-options="{
                                            'name': 'fadeInUpShorter', 'duration': '1s'
                                        }">
                                        <h5 class="banner-subtitle text-uppercase font-weight-bold">
                                            Performance &amp; Lifestyle
                                        </h5>
                                        <h3 class="banner-title ls-25 mb-6">
                                            <span class="text-primary">Introducing</span>
                                            Fashion lifestyle collection
                                        </h3>
                                        <a href="shop-banner-sidebar.html"
                                           class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Intro Slide 1 -->
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                             style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/slides/slide-3.jpg); background-color: #F3F3F3;">
                            <div class="container">
                                <div class="banner-content y-50 d-inline-block">
                                    <div class="slide-animate" data-animation-options="{
                                            'name': 'fadeInDownShorter', 'duration': '1s'
                                        }">
                                        <h5 class="banner-subtitle text-uppercase text-primary font-weight-bold mb-1">
                                            From Online Store
                                        </h5>
                                        <h3 class="banner-title text-uppercase ls-25">Sprimgchic</h3>
                                        <h4 class="ls-25 mb-0">Recommend</h4>
                                        <p class="ls-25">Free shipping on all orders over <span
                                                class="text-dark">$99.00</span></p>
                                        <a href="shop-banner-sidebar.html"
                                           class="btn btn-dark btn-rounded btn-outline btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Intro Slide 3 -->
                    </div>
                    <div class="custom-dots swiper-img-dots appear-animate">
                        <a href="#" class="active appear-animate">
                            <img src="{{asset('/')}}website/assets/images/demos/demo7/slides/dot-1.png" alt="Slide Thumb" width="70"
                                 height="70">
                        </a>
                        <a href="#" class="appear-animate">
                            <img src="{{asset('/')}}website/assets/images/demos/demo7/slides/dot-2.png" alt="Slide Thumb" width="70"
                                 height="70">
                        </a>
                        <a href="#" class="appear-animate">
                            <img src="{{asset('/')}}website/assets/images/demos/demo7/slides/dot-3.png" alt="Slide Thumb" width="70"
                                 height="70">
                        </a>
                        <a href="#" class="appear-animate">
                            <img src="{{asset('/')}}website/assets/images/demos/demo7/slides/dot-4.png" alt="Slide Thumb" width="70"
                                 height="70">
                        </a>
                        <a href="#" class="appear-animate">
                            <img src="{{asset('/')}}website/assets/images/demos/demo7/slides/dot-3.png" alt="Slide Thumb" width="70"
                                 height="70">
                        </a>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm bg-white mb-10"
                     data-swiper-options="{
                        'loop': true,
                        'spaceBetween': 30,
                        'slidesPerView': 1,
                        'autoplay': {
                            'delay': 4000,
                            'disableOnInteraction': false
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 2
                            },
                            '992': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }}">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                                <span class="icon-box-icon icon-shipping">
                                    <i class="w-icon-truck"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                                <span class="icon-box-icon icon-payment">
                                    <i class="w-icon-bag"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                                <span class="icon-box-icon icon-money">
                                    <i class="w-icon-money"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                                <span class="icon-box-icon icon-chat">
                                    <i class="w-icon-chat"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="category-banner-3cols swiper-container swiper-theme pt-2 mb-10 appear-animate"
                     data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '992': {
                                'slidesPerView': 3
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                        <div class="swiper-slide banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/1-1.jpg" alt="Category Banner" width="440"
                                     height="210" style="background-color: #E3DFDE;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-capitalize ls-25">Fashion's</h3>
                                <div class="banner-price-info text-uppercase font-weight-bold text-dark mb-4">
                                    Starting At <span class="text-primary">$29</span>
                                </div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Categpry Banner -->
                        <div class="swiper-slide banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/1-2.jpg" alt="Category Banner" width="440"
                                     height="210" style="background-color: #272729;" />
                            </figure>
                            <div class="banner-content text-center x-50 y-50 w-100">
                                <h5 class="banner-subtitle text-uppercase font-weight-bold text-primary ls-10">GET 40%
                                    OFF YOUR ENTIRE ORDER!</h5>
                                <h3 class="banner-title text-white text-capitalize">Black Friday Sale</h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-outline btn-rounded btn-sm">Shop Now</a>
                            </div>
                        </div>
                        <!-- End of Category Banner -->
                        <div class="swiper-slide banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/1-3.jpg" alt="Category Banner" width="440"
                                     height="210" style="background-color: #DDD8D5;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-capitalize ls-25">For Men's</h3>
                                <div class="banner-price-info text-uppercase font-weight-bold text-dark mb-4">
                                    Starting At <span class="text-primary">$99</span>
                                </div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Categpry Banner -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Category Banner 3Cols -->

                <div class="title-link-wrapper title-deals appear-animate">
                    <h2 class="title">Deals Hot Of The Day</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">More Products<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="row appear-animate">
                    <div class="col-lg-6 mb-4">
                        <div class="product product-list br-xs mb-0">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/1-1.jpg" alt="Product" width="315"
                                         height="355">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                       title="Quick View"></a>
                                </div>
                                <div class="product-countdown-container">
                                    <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                         data-format="DHMS" data-compact="false"
                                         data-labels-short="Days, Hours, Mins, Secs">
                                        00:00:00:00</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Lorem ipsum dolor sit amet</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">$235.35 - $85.05</div>
                                <ul class="product-desc">
                                    <li>Aliquam id diam maecenas ultricies miile.</li>
                                    <li>Volutpat ac tincidunt vitae semper quis le.</li>
                                    <li>Ultrices eros in cursus turpis massa.</li>
                                </ul>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to Cart"><i
                                            class="w-icon-cart"></i> Add To Cart</a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                       title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                       title="Compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="product product-list br-xs mb-0">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/1-2.jpg" alt="Product" width="315"
                                         height="355">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                       title="Quick View"></a>
                                </div>
                                <div class="product-countdown-container">
                                    <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                         data-format="DHMS" data-compact="false"
                                         data-labels-short="Days, Hours, Mins, Secs">
                                        00:00:00:00</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Lorem ipsum dolor sit amet</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">$235.35 - $85.05</div>
                                <ul class="product-desc">
                                    <li>Aliquam id diam maecenas ultricies miile.</li>
                                    <li>Volutpat ac tincidunt vitae semper quis le.</li>
                                    <li>Ultrices eros in cursus turpis massa.</li>
                                </ul>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to Cart"><i
                                            class="w-icon-cart"></i> Add To Cart</a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                       title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                       title="Compare"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product List -->

                <div class="row cols-xl-4 cols-lg-3 cols-sm-2 cols-1 mb-10 appear-animate">
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-1.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Fashionable Leather Satchel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$25.68</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-2.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Mini Wireless Earphone</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$29.99 - $49.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-3.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Women's Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$24.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-5.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">T-Shirt</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$20.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-4.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Leather Stripe Watch</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$125.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-6.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Best Pedestrian Bag</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$35.88</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-7.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Fashionable Original Coat</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$89.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-8.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Classic Hat</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$23.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                </div>
                <!-- End of Product Widget -->

                <div class="notification-wrapper bg-dark br-sm mb-10 appear-animate justify-content-center"
                     style="animation-duration: 1.2s;">
                    <i class="w-icon-mobile"></i>
                    <p>Download our new app today! Dont Miss our mobile-only offers and shop with Android Play.</p>
                    <a href="#"
                       class="btn btn-white btn-outline btn-rounded btn-sm btn-icon-right font-weight-normal text-capitalize">
                        Download<i class="w-icon-long-arrow-down"></i></a>
                </div>
                <!-- End of Notificateion Wrapper -->

                <h2 class="title title-underline pt-1 mb-4 appear-animate">Top Weekly Vendors</h2>
                <div class="swiper-container swiper-theme shadow-swiper vendor-wrapper appear-animate"
                     data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '992': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-xl-4 cols-md-3 cols-sm-2 cols-1">
                        <div class="swiper-slide vendor-widget mb-0">
                            <div class="vendor-widget-banner border-no">
                                <figure class="vendor-banner">
                                    <a href="vendor-dokan-store.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/vendors/1.jpg" alt="Vendor Banner"
                                             width="625" height="300" style="background-color: #EFF0F2;" />
                                    </a>
                                </figure>
                                <div class="vendor-details">
                                    <figure class="vendor-logo">
                                        <a href="vendor-dokan-store.html">
                                            <img src="{{asset('/')}}website/assets/images/demos/demo7/vendors/logo-1.png" alt="Vendor Logo"
                                                 width="90" height="90" />
                                        </a>
                                    </figure>
                                    <div class="vendor-personal">
                                        <h4 class="vendor-name">
                                            <a href="vendor-dokan-store.html">Vendor 1</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                                        </div>
                                        <a href="vendor-dokan-store.html" class="visit-vendor-btn">Browse This
                                            Vendor</a>
                                    </div>
                                    <div class="vendor-products row cols-3 gutter-xs">
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-1.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-2.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-3.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Vendor Widget Banner -->
                        </div>
                        <div class="swiper-slide vendor-widget mb-0">
                            <div class="vendor-widget-banner border-no">
                                <figure class="vendor-banner">
                                    <a href="vendor-dokan-store.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/vendors/2.jpg" alt="Vendor Banner"
                                             width="625" height="300" style="background-color: #525357;" />
                                    </a>
                                </figure>
                                <div class="vendor-details">
                                    <figure class="vendor-logo">
                                        <a href="vendor-dokan-store.html">
                                            <img src="{{asset('/')}}website/assets/images/demos/demo7/vendors/logo-2.png" alt="Vendor Logo"
                                                 width="90" height="90" />
                                        </a>
                                    </figure>
                                    <div class="vendor-personal">
                                        <h4 class="vendor-name">
                                            <a href="vendor-dokan-store.html">Vendor 2</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(6 Reviews)</a>
                                        </div>
                                        <a href="vendor-dokan-store.html" class="visit-vendor-btn">Browse This
                                            Vendor</a>
                                    </div>
                                    <div class="vendor-products row cols-3 gutter-xs">
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-4.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-5.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-6.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Vendor Widget Banner -->
                        </div>
                        <div class="swiper-slide vendor-widget mb-0">
                            <div class="vendor-widget-banner border-no">
                                <figure class="vendor-banner">
                                    <a href="vendor-dokan-store.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/vendors/3.jpg" alt="Vendor Banner"
                                             width="625" height="300" style="background-color: #C7D0D9;" />
                                    </a>
                                </figure>
                                <div class="vendor-details">
                                    <figure class="vendor-logo">
                                        <a href="vendor-dokan-store.html">
                                            <img src="{{asset('/')}}website/assets/images/demos/demo7/vendors/logo-3.png" alt="Vendor Logo"
                                                 width="90" height="90" />
                                        </a>
                                    </figure>
                                    <div class="vendor-personal">
                                        <h4 class="vendor-name">
                                            <a href="vendor-dokan-store.html">Vendor 3</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(4 Reviews)</a>
                                        </div>
                                        <a href="vendor-dokan-store.html" class="visit-vendor-btn">Browse This
                                            Vendor</a>
                                    </div>
                                    <div class="vendor-products row cols-3 gutter-xs">
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-7.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-8.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-9.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Vendor Widget Banner -->
                        </div>
                        <div class="swiper-slide vendor-widget mb-0">
                            <div class="vendor-widget-banner border-no">
                                <figure class="vendor-banner">
                                    <a href="vendor-dokan-store.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/vendors/4.jpg" alt="Vendor Banner"
                                             width="625" height="300" style="background-color: #363435;" />
                                    </a>
                                </figure>
                                <div class="vendor-details">
                                    <figure class="vendor-logo">
                                        <a href="vendor-dokan-store.html">
                                            <img src="{{asset('/')}}website/assets/images/demos/demo7/vendors/logo-4.png" alt="Vendor Logo"
                                                 width="90" height="90" />
                                        </a>
                                    </figure>
                                    <div class="vendor-personal">
                                        <h4 class="vendor-name">
                                            <a href="vendor-dokan-store.html">Vendor 4</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(7 Reviews)</a>
                                        </div>
                                        <a href="vendor-dokan-store.html" class="visit-vendor-btn">Browse This
                                            Vendor</a>
                                    </div>
                                    <div class="vendor-products row cols-3 gutter-xs">
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-10.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-11.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vendor-product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/3-12.jpg"
                                                         alt="Vendor Product" width="91" height="102" />
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Vendor Widget Banner -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Vendor -->

                <div class="title-link-wrapper mb-4 appear-animate">
                    <h2 class="title">Top Categories</h2>
                    <a href="shop-boxed-banner.html" class="text-capitalize font-weight-bold">More Products<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="row mb-7 category-products-wrapper appear-animate">
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <ul class="category-wrapper list-style-none">
                            <li><a href="shop-banner-sidebar.html"><i class="w-icon-tshirt"></i>Clothing &amp;
                                    Apparel</a></li>
                            <li><a href="shop-banner-sidebar.html"><i class="w-icon-camera"></i>Digital Cameras</a>
                            </li>
                            <li><a href="shop-banner-sidebar.html"><i class="w-icon-mobile"></i>Smartphones</a></li>
                            <li><a href="shop-banner-sidebar.html"><i class="w-icon-sofa"></i>Home &amp;
                                    Furnitures</a></li>
                            <li><a href="shop-banner-sidebar.html"><i class="w-icon-computer"></i>Computers &amp;
                                    Laptops</a></li>
                            <li><a href="shop-banner-sidebar.html"><i class="w-icon-basketball"></i>Sport</a></li>
                            <li><a href="shop-banner-sidebar.html"><i class="w-icon-bow"></i>Toys &amp; Baby</a>
                            </li>
                            <li><a href="shop-banner-sidebar.html"><i class="w-icon-ruby"></i>Accessories &amp;
                                    Jewelry</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="swiper-container swiper-theme "
                             data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '768': {
                                        'slidesPerView': 2
                                    },
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    },
                                    '1400': {
                                        'slidesPerView': 5
                                    }
                                }
                            }">
                            <div class="swiper-wrapper row cols-xl-5 cols-lg-4 cols-md-3 cols-2">
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-1.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Colorful Flavoring Box</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$25.70</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-2.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Men's Suede Belt</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$73.71</ins><del class="old-price">$78.04</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-3.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Plastic Cup</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$16.00</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-4.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Headkerchief</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$73.71</ins><del class="old-price">$78.04</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-5.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Mini Wireless Earphone</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$49.99</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-6.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Portable Charger</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$25.00</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-7.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Red Cap Sound Marker</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$65.89 - $69.99</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-8.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Perfect Classic Hat</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$69.99</ins><del class="old-price">$84.16</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-9.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Roller Skate</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$66.99</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/4-10.jpg" alt="Product"
                                                     width="187" height="210">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Men's Black Watch</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$232.62</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- End of Category Products -->

                <div class="row category-banner-2cols appear-animate">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/2-1.jpg" alt="Catgory Banner"
                                     width="670" height="180" style="background-color: #e6e7eb;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-primary text-capitalize font-weight-normal">From
                                    Online Store</h5>
                                <h3 class="banner-title text-capitalize ls-25">Ipad Super Computer</h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Banner -->
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/2-2.jpg" alt="Catgory Banner"
                                     width="670" height="180" style="background-color: #28272f;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-primary text-capitalize font-weight-normal">Season
                                    Collection</h5>
                                <h3 class="banner-title text-white text-capitalize ls-25">Women's Clothes</h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Banner -->
                    </div>
                </div>
                <!-- End of Category Banner 2Cosl -->

                <div class="title-links-wrapper title-underline mb-4 d-flex align-items-center appear-animate">
                    <h2 class="title">Consumer Electronics</h2>
                    <ul
                        class="nav-links list-style-none d-flex align-items-center flex-wrap justify-content-center">
                        <li><a href="shop-banner-sidebar.html">Speaker</a></li>
                        <li><a href="shop-boxed-banner.html">Cameras</a></li>
                        <li><a href="shop-fullwidth-banner.html">Audio</a></li>
                        <li><a href="shop-both-sidebar.html">Smartwatch</a></li>
                        <li><a href="shop-horizontal-filter.html">Computers</a></li>
                        <li><a href="shop-list-sidebar.html">TV &amp; Video</a></li>
                    </ul>
                </div>
                <div class="row banner-product-wrapper appear-animate">
                    <div class="col-xl-3 col-lg-4 col-md-5 mb-4 mb-md-0">
                        <div class="banner banner-fixed br-xs" style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/banner/1.jpg);
                            background-color: #363634;">
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-white text-uppercase ls-25 font-weight-bold">New
                                    Arrivals</h5>
                                <h3 class="banner-title text-white text-capitalize ls-25">Premium True Wireless
                                    Earbuds</h3>
                                <div class="banner-price-info text-white font-weight-bold ls25">Sale up to <span
                                        class="text-primary text-uppercase">20% Off</span></div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-outline btn-rounded">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="swiper-container swiper-theme"
                             data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '768': {
                                        'slidesPerView': 2
                                    },
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-md-2 cols-2">
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-1.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Populated Gaming Mouse</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$70.00</ins><del class="old-price">$85.00</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-2.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Mobile Electronic Recorder</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$26.89</ins><del class="old-price">$29.79</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-3.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Men's Black Watch</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$78.99</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-4.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Fabulous Sound Speaker</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$73.71</ins><del class="old-price">$250.68</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-5.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Smooth Click Mouse</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$18.06</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-6.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Dark-grey Mobile Charger</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$450.68</ins><del class="old-price">$500.00</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-7.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Wireless Mouse</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$19.03</ins><del class="old-price">$22.11</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-8.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Transit Tool</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$63.20</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- End of Banner Product Wrapper -->

                <div class="title-links-wrapper title-underline mb-4 d-flex align-items-center appear-animate">
                    <h2 class="title">Clothing &amp; Apparel</h2>
                    <ul
                        class="nav-links list-style-none d-flex align-items-center flex-wrap justify-content-center">
                        <li><a href="shop-banner-sidebar.html">Women</a></li>
                        <li><a href="shop-boxed-banner.html">Men</a></li>
                        <li><a href="shop-fullwidth-banner.html">Girls</a></li>
                        <li><a href="shop-both-sidebar.html">Boys</a></li>
                        <li><a href="shop-horizontal-filter.html">Baby</a></li>
                        <li><a href="shop-list-sidebar.html">Sales &amp; Deals</a></li>
                    </ul>
                </div>
                <div class="row pb-1 banner-product-wrapper appear-animate">
                    <div class="col-xl-3 col-lg-4 col-md-5 mb-4 mb-md-0">
                        <div class="banner banner-fixed br-xs" style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/banner/2.jpg);
                            background-color: #CCCFD4;">
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-white text-uppercase font-weight-bold ls-25">Weekend
                                    Sale</h5>
                                <h3 class="banner-title text-white text-capitalize ls-25">New Fashion Collection
                                </h3>
                                <div class="banner-price-info text-white font-weight-bold ls25">From only <span
                                        class="text-primary text-uppercase">$185.00</span></div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-outline btn-rounded">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="swiper-container swiper-theme "
                             data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '768': {
                                        'slidesPerView': 2
                                    },
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-md-2 cols-2">
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-1.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Leather Stripe Watch</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$64.47</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-2.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Dark Blue Sneaker</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$23.58 - $45.62</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-3.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Women's Handbag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$78.23</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-4.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Dark Green Bag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$150.60</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-5.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Multi Function Watch</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$75.00</ins><del class="old-price">$95.68</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-6.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html"> Brown Leather Shoes</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(6 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$220.20</ins><del class="old-price">$232.62</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-7.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Top Men's Hiking Hat</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$32.36</ins><del class="old-price">$37.00</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-8.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Womne's Handbag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$25.70</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- End of Banner Product Wrapper -->

                <div class="sale-banner banner br-sm mb-10 appear-animate">
                    <div class="banner-content">
                        <h4
                            class="content-left banner-subtitle text-uppercase mb-8 mb-md-0 mr-0 mr-md-4 text-primary ls-25">
                                <span class="text-dark font-weight-bold lh-1 ls-normal mr-1">Up
                                    <br>To</span>70% Sale!</h4>
                        <div class="content-right bg-dark">
                            <h3
                                class="banner-title text-uppercase font-weight-normal mb-4 mb-md-0 ls-25 text-white">
                                    <span>Shop By The
                                        <strong class="mr-10 pr-lg-10">Most Popular Brand Now!</strong>
                                        Shop By The
                                        <strong class="mr-10 pr-lg-10">Most Popular Brand Now!</strong>
                                        Shop By The
                                        <strong class="mr-10 pr-lg-10">Most Popular Brand Now!</strong>
                                    </span>
                            </h3>
                            <a href="shop-banner-sidebar.html" class="btn btn-white btn-rounded">Shop Now
                                <i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End of Sale Banner -->

                <div class="row mb-4 appear-animate">
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <h4 class="title title-underline mb-2 pt-1">Best Selling</h4>
                        <div class="widget widget-products">
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-1.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Dark Blue Sneaker</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$23.58 - $45.62</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-2.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Women's Handbag</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$25.70</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-3.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Perfect Classic Hat</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$69.99</ins><del class="old-price">$84.16</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                        </div>
                        <!-- End of Widget Products -->
                    </div>
                    <!-- End of Col -->

                    <div class="col-lg-3 col-sm-6 mb-6">
                        <h4 class="title title-underline mb-2 pt-1">Sale Products</h4>
                        <div class="widget widget-products">
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-4.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Perfect Classic Hat</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$69.99</ins><del class="old-price">$84.16</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-5.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Portable Charger</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$25.00</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-6.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Headkerchief</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$73.71</ins><del class="old-price">$78.04</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                        </div>
                        <!-- End of Widget Products -->
                    </div>
                    <!-- End of Col -->

                    <div class="col-lg-3 col-sm-6 mb-6">
                        <h4 class="title title-underline mb-2 pt-1">Featured Products</h4>
                        <div class="widget widget-products">
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-7.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">T-Shirt</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$20.00</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-8.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Whiter Training Shoes</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$25.00 - $45.00</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-9.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Grey Calotte</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$320.00</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                        </div>
                        <!-- End of Widget Products -->
                    </div>
                    <!-- End of Col -->

                    <div class="col-lg-3 col-sm-6 mb-6">
                        <h4 class="title title-underline mb-2 pt-1">Latest Products</h4>
                        <div class="widget widget-products">
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-10.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Women's Training Shoes</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$48.00</ins><del class="old-price">$54.00</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-11.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Multi Function Watch</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$75.00</ins><del class="old-price">$95.68</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-12.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Top Men's Hiking Hat</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$32.36</ins><del class="old-price">$37.00</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                        </div>
                        <!-- End of Widget Products -->
                    </div>
                    <!-- End of Col -->
                </div>
                <!-- End of Row -->

                <div class="swiper-container swiper-theme brands-wrapper br-sm mb-10 appear-animate" data-swiper-options="{
                        'loop': true,
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'autoplay': {
                            'delay': 4000,
                            'disableOnInteraction': false
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 6
                            },
                            '1200': {
                                'slidesPerView': 8
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/1.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/2.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/3.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/4.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/5.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/6.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/7.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/8.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- End of Brands Wrapper -->

                <div class="title-link-wrapper title-post mb-4 appear-animate">
                    <h2 class="title ls-normal mb-0">From Our Blog</h2>
                    <a href="blog-listing.html" class="font-weight-bold font-size-normal mb-2">View All Articles<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="swiper-container swiper-theme post-wrapper mb-8 mb-lg-4 appear-animate"
                     data-swiper-options="{
                        'slidesPerView': 1,
                        'spaceBetween': 20,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '992': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/blog/1.jpg" alt="Post" width="325" height="214"
                                         style="background-color: #b8bfc4;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Comes a cool blog post with Images</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/blog/2.jpg" alt="Post" width="325" height="214"
                                         style="background-color: #596066;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Comes a cool blog post with Images</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/blog/3.jpg" alt="Post" width="325" height="214"
                                         style="background-color: #eff3f4;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Comes a cool blog post with Images</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/blog/4.jpg" alt="Post" width="325" height="214"
                                         style="background-color: #68605e;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Comes a cool blog post with Images</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Blog Post -->

                <div class="title-link-wrapper title-recent mb-4 appear-animate">
                    <h2 class="title ls-normal mb-0">Recently Viewed</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold font-size-normal mb-2">More Products<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="swiper-container swiper-theme shadow-swiper appear-animate pb-2 mb-10 appear-animate"
                     data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 5
                            },
                            '992': {
                                'slidesPerView': 6
                            },
                            '1200': {
                                'slidesPerView': 8
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-1.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Top Men's Hiking Hat</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-2.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Leather Stripe Watch</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-3.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Red Cap Sound Marker</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-4.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Smartphone Electronic Charger</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-5.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Blue Ski Boots</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-6.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Soft Sound Marker</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-7.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Multi Function Watch</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-8.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Running Machine</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Reviewed Producs -->
            </div>
            <!-- End of Container -->
        </div>
        <!-- End of Page Cotent -->
    </main>
    <!-- end of .main -->
@endsection