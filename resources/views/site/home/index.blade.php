@extends('layouts.site')
@section('body_class', 'home')
@section('meta_title', __('Home title'))
@section('meta_description',  __('Home description'))

@section('content')

    @include('site.home.components.features')

    <!-- Slider -->
    <div id="magik-slideshow" class="magik-slideshow">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                   @include('site.home.components.slider')
                </div>
                @isset($hot_deal_product)
                    @foreach($hot_deal_product as $product)
                        <div class="col-md-3 hot-deal">
                            <ul class="products-grid">
                                <li class="right-space two-height">
                                    @include('site.product.item')
                                </li>
                            </ul>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
    <!-- end Slider -->




    <!-- mob features box -->
    <div class="our-features-box hidden-lg hidden-sm hidden-md">
        <div class="container">
            <div class="features-block">
                <div class="col-lg-3 col-xs-12 col-sm-6">
                    <div class="feature-box first"><span class="fa fa-truck"></span>
                        <div class="content">
                            <h3>{{ __('Free shipping across Ukraine') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-12 col-sm-6">
                    <div class="feature-box"><span class="fa fa-headphones"></span>
                        <div class="content">
                            <h3>{{ __('Customer support 24x7') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-12 col-sm-6">
                    <div class="feature-box"><span class="fa fa-dollar"></span>
                        <div class="content">
                            <h3>{{ __('Money back guarantee') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-12 col-sm-6">
                    <div class="feature-box last"><span class="fa fa-mobile"></span>
                        <div class="content">
                            <h3>{{ __('Hotline') }} <a href="tel:+8000000001">+(800) 000-00-01</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End mob features box -->

    <!-- promotion banner -->
    <div class="promotion-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4"><a href="#"><img alt="" src="http://placehold.it/390x220"></a></div>
                <div class="col-lg-5 col-sm-5 last"><a href="#"><img alt="" src="http://placehold.it/500x220"></a></div>
                <div class="col-lg-3 col-sm-3 last"><a href="#"><img alt="" src="http://placehold.it/290x220"></a></div>
            </div>
        </div>
    </div>
    <!-- End promotion banner -->
    @php($category = \App\Product::joinLocalization()->whereExistsCategoryIds(5432)->withCategory()->where('details->published', 1)->where('details->price', '>' , 0)->limit(8)->get())
    @php($category4 = \App\Product::joinLocalization()->whereExistsCategoryIds(5432)->withCategory()->where('details->published', 1)->where('details->price', '>' , 0)->limit(4)->get())

    <!-- New Products  + Tab -->
    <div class="content-page">
        <div class="container">
            <!-- featured category -->
            <div class="category-product">

                <div class="navbar nav-menu">
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <div class="new_title">
                                    <h2>New Products</h2>
                                </div>
                            </li>
                            <li class="active"><a data-toggle="tab" href="#tab-1">Mobiles</a> </li>
                            <li><a data-toggle="tab" href="#tab-2">Cameras</a> </li>
                            <li><a data-toggle="tab" href="#tab-3">Computer</a> </li>
                            <li><a data-toggle="tab" href="#tab-4">TV & Audio</a> </li>
                            <li><a data-toggle="tab" href="#tab-5">Accessories</a> </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>

                <div class="product-bestseller">

                    <div class="product-bestseller-content">
                        <div class="product-bestseller-list">
                            <div class="tab-container">

                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-1">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            @foreach($category4 as $product)
                                                <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                    @include('site.product.item')
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- tab product -->
                                <div class="tab-panel" id="tab-2">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            @foreach($category4 as $product)
                                                <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                    @include('site.product.item')
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-panel" id="tab-3">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            @foreach($category4 as $product)
                                                <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                    @include('site.product.item')
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-panel" id="tab-4">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            @foreach($category4 as $product)
                                                <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                    @include('site.product.item')
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-panel" id="tab-5">
                                    <div class="category-products">
                                        <ul class="products-grid">
                                            <ul class="products-grid">
                                                @foreach($category4 as $product)
                                                    <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                        @include('site.product.item')
                                                    </li>
                                                @endforeach
                                            </ul>
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



    <!-- bestsell slider -->
    <section class="bestsell-pro">
        <div class="container">
            <div class="slider-items-products">
                <div class="bestsell-block">
                    <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                        <div class="home-block-inner">
                            <a href="grid.html">
                                <img src="http://placehold.it/300x450" alt="Змішувач для ванни"></a>
                            <div class="banner-content">
                                <div class="banner-text">Змішувач для ванни</div>
                                <div class="banner-text1" hidden></div>
                                <p>Змішувач для ванни Lidz (CRM)-20 38 005 10 New</p>
                                <a href="#" class="view-bnt">Перейти сейчас</a></div>
                        </div>
                        <div class="block-title">
                            <h2>Змішувач для ванни</h2>
{{--                            <div class="hidden-xs hidden-sm">Lorem Ipsum is simply dummy text of the printing and--}}
{{--                                typesetting industry.--}}
{{--                            </div>--}}
                        </div>
                        <div class="slider-items slider-width-col4 products-grid block-content">
                           @foreach($category as $product)
                               @include('site.product.item')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bestsell Slider -->


    {{--@php($category = \App\Product::joinLocalization()->whereExistsCategoryIds(5432)->withCategory()->where('details->published', 1)->where('details->price', '>' , 0)->limit(8)->get())--}}

    <!-- Special Product Slider -->
    <section class="new-arrivals-pro">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12 featured-add-box">
                    <div class="featured-add-inner"><a href="#"> <img src="images/site/banner7.jpg" alt="f-img"></a>
                        <div class="banner-content">
                            <div class="banner-text">Grinder Mixer</div>
                            <div class="banner-text1">49% off</div>
                            <p>on selected products</p>
                            <a href="#" class="view-bnt">Shop now</a></div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12 featured-pro-block">
                    <div class="slider-items-products">
                        <div class="new-arrivals-block">
                            <div id="new-arrivals-slider" class="product-flexslider hidden-buttons">
                                <div class="home-block-inner">
                                    <div class="block-title">
                                        <h2>Featured Product</h2>
                                    </div>
                                </div>
                                <div class="slider-items slider-width-col4 products-grid block-content">
                                    @foreach($category as $product)
                                        @include('site.product.item')
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Special Product Slider -->

    <!-- Testimonials Box Slider -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 testimonials">
                <div class="ts-testimonial-widget">
                    <div class="slider-items-products">
                        <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                            <div class="slider-items slider-width-col4 fadeInUp">
                                <div class="holder">
                                    <div class="thumb"><img src="images/site/member1.jpg" alt="testimonials img"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo
                                        rumes fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet
                                        urna. Aliquam erat volutpat.</p>
                                    <div class="line"></div>
                                    <strong class="name">Saraha Smith</strong></div>
                                <div class="holder">
                                    <div class="thumb"><img src="images/site/member2.jpg" alt="testimonials img"></div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Nam sapien nunc, convallis in sollicitudin in, ullamcorper ad
                                        eulibero. Etiam cursus eu ipsum egestas.</p>
                                    <div class="line"></div>
                                    <strong class="name">Mark doe</strong></div>
                                <div class="holder">
                                    <div class="thumb"><img src="images/site/member3.jpg" alt="testimonials img"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis ac turpis.
                                        Donec sit amet eros.</p>
                                    <div class="line"></div>
                                    <strong class="name">John Doe</strong></div>
                                <div class="holder">
                                    <div class="thumb"><img src="images/site/member4.jpg" alt="testimonials img"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci.</p>
                                    <div class="line"></div>
                                    <strong class="name">Stephen Doe</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom Slider -->
            <div class="col-md-6 col-sm-12 custom-slider-wrap">
                <div class="custom-slider-inner">
                    <div class="home-custom-slider">
                        <div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active"><img src="images/site/custom-slide2.jpg" alt="slide3">
                                        <div class="carousel-caption">
                                            <h3><a title=" Sample Product" href="#">spring <strong>2018</strong></a>
                                            </h3>
                                            <span>Best Laptop</span> <a class="link" href="#">shop collection</a></div>
                                    </div>
                                    <div class="item"><img src="images/site/custom-slide3.jpg" alt="slide2">
                                        <div class="carousel-caption"><span>Huge <strong>sale</strong></span>
                                            <p>save up to <strong>70% OFF</strong> Electronics collection</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                            <a class="link" href="#">Shop Now</a></div>
                                    </div>
                                    <div class="item"><img src="images/site/custom-slide1.jpg" alt="slide1">
                                        <div class="carousel-caption"><span>New <strong>Arrivals</strong></span>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet.</p>
                                            <a class="link" href="#">View collection</a></div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span>
                                </a> <a class="right carousel-control" href="#" data-slide="next"> <span
                                        class="sr-only">Next</span> </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Box Slider -->

    <!-- Latest Blog hidden-->
    <div class="container" >
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-outer-container">
                    <div class="block-title">
                        <h2>Latest Blog</h2>
                        <div class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </div>
                    </div>
                    <div class="blog-inner">
                        <div class="col-lg-4 col-md-4 col-sm-4 blog-preview_item">
                            <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with
                                    photo</a></h4>
                            <div class="entry-thumb image-hover2"><a href="blog_single_post.html"> <img alt="Blog"
                                                                                                        src="images/site/blog-img1.jpg">
                                </a></div>
                            <div class="blog-preview_info">
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">8 comments</a></li>
                                    <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span
                                            class="month">Feb</span></li>
                                </ul>
                                <div class="blog-preview_desc">Lid est laborum dolo rumes fugats untras. Etharums ser
                                    quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers
                                    sadips.
                                </div>
                                <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 blog-preview_item">
                            <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with
                                    photo</a></h4>
                            <div class="entry-thumb image-hover2"><a href="blog_single_post.html"> <img alt="Blog"
                                                                                                        src="images/site/blog-img2.jpg">
                                </a></div>
                            <div class="blog-preview_info">
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 comments</a></li>
                                    <li><i class="fa fa-clock-o"></i><span class="day">25</span> <span
                                            class="month">Jan</span></li>
                                </ul>
                                <div class="blog-preview_desc">Ut tellus dolor, dapibus eget, elementum vel, cursus
                                    eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.
                                    Donec sit amet eros.
                                </div>
                                <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 blog-preview_item">
                            <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with
                                    photo</a></h4>
                            <div class="entry-thumb image-hover2"><a href="blog_single_post.html"> <img alt="Blog"
                                                                                                        src="images/site/blog-img3.jpg">
                                </a></div>
                            <div class="blog-preview_info">
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 comments</a></li>
                                    <li><i class="fa fa-clock-o"></i><span class="day">10</span> <span
                                            class="month">Jan</span></li>
                                </ul>
                                <div class="blog-preview_desc">Ut tellus dolor, dapibus eget, elementum vel, cursus
                                    eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.
                                    Donec sit amet eros.
                                </div>
                                <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Blog -->


@endsection


@section('javascript')

    <script src="{{ asset('js/site/jquery.min.js') }}"></script>
    <script src="{{ asset('js/site/plugins/revslider.js') }}"></script>

    <script>

        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 915,
            startheight: 497,
            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,
            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',
            touchenabled: 'on',
            onHoverStop: 'on',
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            spinner: 'spinner0',
            keyboardNavigation: 'off',
            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',
            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: 'off',
            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,
            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });

    </script>

@endsection
