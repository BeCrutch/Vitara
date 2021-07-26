@extends('layouts.site')
@section('body_class', 'product')
@section('meta_title', $product->meta_title)
@section('meta_description', $product->meta_description)

@section('breadcrumbs')
    @php($i = 2)
    @if (isset($product->category))
        @foreach($product->category->ancestors as $ancestor)
            <li itemprop="itemListElement"
                itemscope itemtype="https://schema.org/ListItem"
            >
                <a href="{{ route('site.resource', $ancestor->slug) }}" itemprop="item">
                    <span itemprop="name">
                        {{ $ancestor->name }}
                    </span>
                </a>
                <meta itemprop="position" content="{{ $i }}" />
            </li>
            @php($i++)
        @endforeach
        <li itemprop="itemListElement"
            itemscope itemtype="https://schema.org/ListItem"
        >
            <a href="{{ route('site.resource', $product->category->slug) }}" itemprop="item">
                <span itemprop="name">
                     {{ $product->category->name }}
                </span>
            </a>
            <meta itemprop="position" content="{{ $i++ }}" />
        </li>
    @endif
    <li class="active"
        itemprop="itemListElement"
        itemscope itemtype="https://schema.org/ListItem"
    >
        <span itemprop="name">
            {{ $product->name }}
        </span>
        <meta itemprop="position" content="{{ $i }}" />
    </li>
@endsection

@section('jsonld')
    {!! $product->getJsonLd() !!}
@endsection

@section('content')

    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main">

            <div class="container">
                <div class="row">

                    <div class="col-main">
                        <div class="product-view">
                            <div class="product-essential">
                                <form action="#" method="post" id="product_addtocart_form">
                                    <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                    <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">

                                        <div class="new-label new-top-left"> New </div>

                                        <div class="product-image">

                                            <div class="product-full">
                                                <img id="product-zoom" src="products-images/product1.jpg" data-zoom-image="products-images/product1.jpg" alt="product-image"/>
                                            </div>

                                            <div class="more-views">
                                                <div class="slider-items-products">
                                                    <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                                                        <div class="slider-items slider-width-col4 block-content">
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product2.jpg" data-zoom-image="products-images/product2.jpg"> <img id="product-zoom"  src="products-images/product2.jpg" alt="product-image"/> </a></div>
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product3.jpg" data-zoom-image="products-images/product3.jpg"> <img id="product-zoom"  src="products-images/product3.jpg" alt="product-image"/> </a></div>
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product4.jpg" data-zoom-image="products-images/product4.jpg"> <img id="product-zoom"  src="products-images/product4.jpg" alt="product-image"/> </a></div>
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product5.jpg" data-zoom-image="products-images/product5.jpg"> <img id="product-zoom"  src="products-images/product5.jpg" alt="product-image"/> </a> </div>
                                                            <div class="more-views-items"> <a href="#" data-image="products-images/product6.jpg" data-zoom-image="products-images/product6.jpg"> <img id="product-zoom"  src="products-images/product6.jpg" alt="product-image" /> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end: more-images -->
                                    </div>

                                    <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
{{--                                        <div class="product-next-prev">--}}
{{--                                            <a class="product-next" href="#">--}}
{{--                                                <span></span>--}}
{{--                                            </a>--}}
{{--                                            <a class="product-prev" href="#"><span></span></a>--}}
{{--                                        </div>--}}
                                        <div class="product-name">
                                            <h1>{{ $product->getData('name') }}</h1>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:60%" class="rating"></div>
                                            </div>
                                            <p class="rating-links">
                                                <a href="#">1 Review(s)</a>
                                                <span class="separator">|</span>
                                                <a href="#">Add Your Review</a>
                                            </p>
                                        </div>

                                        <div class="price-block">
                                            <div class="price-box">
                                                <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price">{{ number_format(ceil($product->getDetails('price')),0,'',' ') }} <span>грн.</span></span></p>
                                                @if ($product->oldPrice)
                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format(ceil($product->oldPrice),0,'',' ') }}<span>грн.</span></span></p>
                                                @endif
                                                {{--<p class="availability in-stock pull-right"><span>In Stock</span></p>--}}
                                            </div>
                                        </div>

                                        <div class="short-description">
                                            <h2>Quick Overview</h2>
                                            <p>{{ $product->description }}</p>
                                        </div>
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <div class="pull-left">
                                                    <div class="custom pull-left">
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                                    </div>
                                                </div>
                                                <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button">Add to Cart</button>
                                            </div>
{{--                                            <div class="email-addto-box">--}}
{{--                                                <ul class="add-to-links">--}}
{{--                                                    <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>--}}
{{--                                                    <li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>--}}
{{--                                                </ul>--}}
{{--                                                <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>--}}
{{--                                            </div>--}}
                                        </div>
{{--                                        <div class="social">--}}
{{--                                            <ul class="link">--}}
{{--                                                <li class="fb"><a href="#"></a></li>--}}
{{--                                                <li class="tw"><a href="#"></a></li>--}}
{{--                                                <li class="googleplus"><a href="#"></a></li>--}}
{{--                                                <li class="rss"><a href="#"></a></li>--}}
{{--                                                <li class="pintrest"><a href="#"></a></li>--}}
{{--                                                <li class="linkedin"><a href="#"></a></li>--}}
{{--                                                <li class="youtube"><a href="#"></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                        <div class="add_info">
                            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                <li class="active"> <a href="#product_tabs_description" data-toggle="tab">{{ __('Description') }}</a></li>
                                <li><a href="#product_tabs_tags" data-toggle="tab">{{ __('Specifications') }}</a></li>
                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="product_tabs_description">
                                    <div class="std">
                                        <p>{{ $product->description }}</p>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product_tabs_tags">
                                    <div class="row">
                                        @foreach($product->characteristics->chunk(ceil($product->characteristics->count() / 2)) as $characteristics)
                                            <div class="col-12 col-lg-6">
                                                @foreach($characteristics as $characteristic)
                                                    <div
                                                        class="info-block border-bottom-dotted py-2 px-1 border-bottom border-secondary"
                                                        data-dropdown="false">
                                                        <div
                                                            class="info-block--name">{!! $characteristic->name !!}</div>
                                                        <div
                                                            class="info-block--value">{!! $characteristic->value !!} </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>

{{--                                    <table class="table-product-info">--}}
{{--                                        <tbody>--}}
{{--                                        @foreach ($product->characteristics as $characteristic)--}}
{{--                                            @if ($characteristic->characteristic->published)--}}
{{--                                                <tr>--}}
{{--                                                    <td>{{ $characteristic->name }}</td>--}}
{{--                                                    <td>{{ $characteristic->value }}</td>--}}
{{--                                                </tr>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Main Container End -->

@endsection
