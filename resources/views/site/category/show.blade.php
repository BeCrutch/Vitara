@extends('layouts.site')
@section('body_class', 'category')
@section('meta_title', $category->meta_title)
@section('meta_description', $category->meta_description)

@if (isset($_GET['page']))
    @section('rel_alternate_pagination')
            <link rel="canonical"href="{{ strtok(LaravelLocalization::getLocalizedURL(), '?') }}">
    @endsection
@endif

@section('breadcrumbs')
    @php($i = 2)
    @foreach($category->ancestors as $ancestor)
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" itemprop="item">
            <a href="{{ route('site.resource', $ancestor->slug) }}" itemprop="name">
               {{ $ancestor->name }}
            </a>
            <span>/ </span>
            <meta itemprop="position" content="{{ $i }}" />
        </li>
        @php($i++)
    @endforeach
    <li itemprop="itemListElement"
        itemscope itemtype="https://schema.org/ListItem">
        <strong itemprop="name">
            {{ $category->name }}
        </strong>
        <meta itemprop="position" content="{{ $i }}" />
    </li>
@endsection

@section('content')

    @include('site.components.breadcrumbs', ['title' => $category->getData('name'), 'h1' => true])

    <form>
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    </form>

    @if( $category->descendants->isNotEmpty() )

        <section class="main-container col2-left-layout">

            <div class="container">

                <div class="row">

                    @foreach($category->descendants as $category)

                        <div class="col-xs-6 col-sm-4 col-lg-3">

                            <a href="{{ route('site.resource', $category->slug) }}">

                                <div>

                                    <div class="w-100" style="padding: 30px;">

                                        {!! img(['type' => 'product', 'class' => ['lazy', 'img-data-path'], 'data-src' => true, 'sku' => $category->product->sku, 'size' => 600, 'alt' => $category->name]) !!}

                                    </div>

                                    <div class="text-center">
                                        <span>{{ $category->name }}</span>
                                    </div>

                                </div>

                            </a>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>


    @else

        <!-- Main Container -->
        <section class="main-container col2-left-layout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-push-3">
                        <div class="category-description std">
                            <!-- Category slider -->
{{--                            <div class="slider-items-products">--}}
{{--                                <div id="category-desc-slider" class="product-flexslider hidden-buttons">--}}
{{--                                    <div class="slider-items slider-width-col1 owl-carousel owl-theme">--}}

{{--                                        <!-- Item -->--}}
{{--                                        <div class="item"> <a href="#"><img alt="" src="images/category-img1.jpg"></a>--}}
{{--                                            <div class="cat-img-title cat-bg cat-box">--}}
{{--                                                <div class="small-tag">Big Sale</div>--}}
{{--                                                <h2 class="cat-heading">Mobiles Collection</h2>--}}
{{--                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End Item -->--}}

{{--                                        <!-- Item -->--}}
{{--                                        <div class="item"> <a href="#"><img alt="" src="images/category-img2.jpg"></a>--}}
{{--                                            <div class="cat-img-title cat-bg cat-box">--}}
{{--                                                <div class="small-tag">Street Style</div>--}}
{{--                                                <h2 class="cat-heading">New Season</h2>--}}
{{--                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>--}}
{{--                                            </div>--}}
{{--                                            <!-- End Item -->--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- End Category slider -->
                        </div>

                        <article class="col-main">
                            <!-- Category name -->
                            <h2 class="page-heading">
                                <span class="page-heading-title">{{ $category->getData('name') }}</span>
                            </h2>
                            <!-- End Category name -->

                            <div class="display-product-option">
                                <div class="pager hidden-xs">
                                    <div class="pages">
                                        {!! $products->links() !!}
{{--                                        <ul class="pagination">--}}
{{--                                            <li><a href="#">&laquo;</a></li>--}}
{{--                                            <li class="active"><a href="#">1</a></li>--}}
{{--                                            <li><a href="#">2</a></li>--}}
{{--                                            <li><a href="#">3</a></li>--}}
{{--                                            <li><a href="#">4</a></li>--}}
{{--                                            <li><a href="#">5</a></li>--}}
{{--                                            <li><a href="#">&raquo;</a></li>--}}
{{--                                        </ul>--}}
                                    </div>
                                </div>
                            </div>


                            <div class="category-products">
                                @if($products->isNotEmpty())
                                <ul class="products-grid">
                                    @foreach($products as $product)
                                    <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        @include('site.product.item')
                                    </li>
                                    @endforeach
                                </ul>


{{--                                        <section class="text-center">--}}
{{--                                            <!-- Classic Pagination-->--}}
{{--                                            @isset($showMore)--}}
{{--                                                <button type="button" class="btn-more-link" data-page="{{ $showMore['page'] }}"--}}
{{--                                                        data-url="{{ LaravelLocalization::localizeUrl('/show-more') . '?' . Request::getQueryString() }}"--}}
{{--                                                        id="showMore"--}}
{{--                                                        data-token="{{ csrf_token() }}" data-slug="{{ $showMore['slug'] }}"--}}
{{--                                                >--}}
{{--                                                    @lang('Show More')--}}
{{--                                                </button>--}}
{{--                                            @endisset--}}
{{--                                        </section>--}}
                                <!-- Pagination-->
{{--                                        <section class="section-sm">--}}
{{--                                            <!-- Classic Pagination-->--}}

{{--                                        </section>--}}

                                @else
                                    <div class="section-sm m-auto">
                                        <p class="pt-5 text-center">{{ __('No products') }}</p>
                                    </div>
                                @endif
                            </div>


                            <div class="toolbar">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div id="sort-by">




                                            <label class="left">Sort By: </label>
                                            <select class="form-input select-filter" data-placeholder="Default sorting"
                                                    data-minimum-results-for-search="Infinity">
                                                <option >{{ __('Sort by') }}</option>
                                                <option value="1" {{ ($_GET['name'] ?? null) == 'up' ? 'selected' : '' }}>{{ __('Sort by name low to high') }}</option>
                                                <option value="2" {{ ($_GET['name'] ?? null) == 'down' ? 'selected' : '' }}>{{ __('Sort by name high to low') }}</option>
                                                <option value="3" {{ ($_GET['price'] ?? null) == 'up' ? 'selected' : '' }}>{{ __('Sort by price low to high') }}</option>
                                                <option value="4" {{ ($_GET['price'] ?? null) == 'down' ? 'selected' : '' }}>{{ __('Sort by price high to low') }}</option>

                                            </select>

{{--                                            <ul>--}}
{{--                                                <li><a href="#">Position<span class="right-arrow"></span></a>--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#">Name</a></li>--}}
{{--                                                        <li><a href="#">Price</a></li>--}}
{{--                                                        <li><a href="#">Position</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-7 col-md-5">
{{--                                    {!! $products->links() !!}--}}
                                        <div class="pager">
                                            <div class="pages">
                                                <label>Page:</label>
                                                <ul class="pagination">
                                                    <li><a href="#">&laquo;</a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">&raquo;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-12 col-md-3">
                                        <div id="limiter">
                                            <label>View: </label>
                                            <ul>
                                                <li><a href="#">18<span class="right-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="#">20</a></li>
                                                        <li><a href="#">25</a></li>
                                                        <li><a href="#">30</a></li>
                                                        <li><a href="#">35</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                                    </div>

                                </div>

                            </div>
                        </article>
                    </div>

                    @if ($productsTotal > 1)
                        <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                             @include('site.components.filter')
                        </div>
                    @endif

                </div>
            </div>
        </section>
        <!-- Main Container End -->

        {{--        <section class="section-md bg-white">--}}

{{--            <div class="shell">--}}
{{--                <div class="range range-60 range-md-reverse">--}}
{{--                    <div class="section-divided__main {{ $productsTotal <= 1 ? 'cell-12' : 'cell-md-9 section-divided__main-left'}}">--}}
{{--                        @if($products->isNotEmpty())--}}
{{--                            <div class="section-sm">--}}
{{--                                <div class="filter-shop-box">--}}
{{--                                    <p>{{ __('Showing') }} {{ $products->count() }} {{ __('of') }} {{ $products->total() }} </p>--}}
{{--                                    <div class="form-wrap">--}}
{{--                                        <!--Select 2-->--}}
{{--                                        <select class="form-input select-filter" data-placeholder="Default sorting"--}}
{{--                                                data-minimum-results-for-search="Infinity">--}}
{{--                                            <option >{{ __('Sort by') }}</option>--}}
{{--                                            <option value="1" {{ ($_GET['name'] ?? null) == 'up' ? 'selected' : '' }}>{{ __('Sort by name low to high') }}</option>--}}
{{--                                            <option value="2" {{ ($_GET['name'] ?? null) == 'down' ? 'selected' : '' }}>{{ __('Sort by name high to low') }}</option>--}}
{{--                                            <option value="3" {{ ($_GET['price'] ?? null) == 'up' ? 'selected' : '' }}>{{ __('Sort by price low to high') }}</option>--}}
{{--                                            <option value="4" {{ ($_GET['price'] ?? null) == 'down' ? 'selected' : '' }}>{{ __('Sort by price high to low') }}</option>--}}

{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="range range-xs-center range-70 products-wrapper">--}}
{{--                                    @foreach($products as $product)--}}
{{--                                        <div class="cell-sm-6 cell-lg-4">--}}
{{--                                            @include('site.product.item')--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <section class="text-center">--}}
{{--                                <!-- Classic Pagination-->--}}
{{--                                @isset($showMore)--}}
{{--                                <button type="button" class="btn-more-link" data-page="{{ $showMore['page'] }}"--}}
{{--                                        data-url="{{ LaravelLocalization::localizeUrl('/show-more') . '?' . Request::getQueryString() }}"--}}
{{--                                        id="showMore"--}}
{{--                                        data-token="{{ csrf_token() }}" data-slug="{{ $showMore['slug'] }}"--}}
{{--                                >--}}
{{--                                    @lang('Show More')--}}
{{--                                </button>--}}
{{--                                @endisset--}}
{{--                            </section>--}}
{{--                            <!-- Pagination-->--}}
{{--                            <section class="section-sm">--}}
{{--                                <!-- Classic Pagination-->--}}
{{--                                {!! $products->links() !!}--}}
{{--                            </section>--}}
{{--                        @else--}}
{{--                            <div class="section-sm m-auto">--}}
{{--                                <p class="pt-5 text-center">{{ __('No products') }}</p>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                    --}}
{{--                    @if ($productsTotal > 1)--}}
{{--                        @include('site.components.filter')--}}
{{--                    @endif--}}


{{--                </div>--}}
{{--            </div>--}}

{{--        </section>--}}

    @endif

    @if($categoryText)

        <section class="section-md bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 category__descriptions">
                        {!! $categoryText !!}
                    </div>
                </div>
            </div>
        </section>

    @endif

@endsection
