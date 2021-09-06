<!-- Header -->
<header>
    <div class="header-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-2 col-sm-3 col-xs-12 logo-block">
                    <!-- Header Logo -->
                    <div class="logo"> <a title="{{ __('Brand logo') }}" href="{{ asset('/') }}"><img alt="{{ __('Brand logo') }}" src="{{ asset('images/site/logo.png') }}"> </a> </div>
                    <!-- End Header Logo -->
                </div>
                <!-- Header Language -->
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-8 pull-right hidden-xs">
                    <div class="dropdown block-language-wrapper">

                            <a role="button" data-toggle="dropdown" class="block-language dropdown-toggle" href="#" style="text-transform: uppercase;">
                              {{ LaravelLocalization::getCurrentLocale() }}<span class="caret"></span>
                            </a>

                        <ul class="dropdown-menu" role="menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li role="presentation">
                                    <a style="text-transform: uppercase;" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, []) }}">{{ $localeCode == 'uk' ? 'ua' : $localeCode }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Header Language -->

                    <!-- Header Top Links -->
                    <div class="toplinks">
                        <div class="links">

                            <div class="myaccount"><a title="My Account" href="#"><span class="hidden-xs">Ура, все заработало</span></a> </div>

                            <div class="myaccount"><a title="My Account" href="{{ route('site.resource', 'about-us') }}"><span class="hidden-xs">{{ __('About us') }}</span></a> </div>

                            <div class="check"><a title="Checkout" href="{{ route('site.contacts') }}"><span class="hidden-xs">{{ __('Contacts') }}</span></a> </div>

                            <div class="demo"><a title="Blog" href="{{ route('site.blog') }}"><span class="hidden-xs">{{ __('Blog') }}</span></a> </div>

                            {{--<div class="login"><a href="login.html"><span class="hidden-xs">Log In</span></a> </div>--}}
                        </div>
                    </div>
                    <!-- End Header Top Links -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- Navigation -->
<nav>
    <div class="container">
        <div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 hidden-xs nav-icon">
                <div class="mega-container visible-lg visible-md visible-sm">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3><i class="fa fa-navicon"></i>{{ __('All categories') }}</h3>
                        </div>
                        @include('site.components.categories')
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-5 col-sm-5 col-xs-3 hidden-xs category-search-form">
                <div class="search-box">
                    <form id="search_mini_form" action="#" method="get">
                        <select name="cat" id="cat" class="cate-dropdown hidden-sm hidden-md">
                            <option>All Categories</option>
                            <option value="1014">Electronics</option>
                            <option value="1035">Furniture</option>
                            <option value="1051">Boys</option>
                            <option value="1052">Girls</option>
                            <option value="1053">Bags</option>
                            <option value="1054">Shoes</option>
                            <option value="962">Women</option>
                            <option value="988">Men</option>
                        </select>

                        <!-- Autocomplete End code -->
                        <input id="search" type="text" name="q" value="{{ __('Enter your search...') }}" class="searchbox" maxlength="128">
                        <button type="submit" title="Search" class="search-btn-bg" id="submit-button"><span>{{ __('Search') }}</span></button>
                    </form>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 card_wishlist_area" style="display: flex; justify-content:flex-end;">

                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">{{ __('Menu') }}</span> </div>
                </div>

                <div class="top-cart-contain" style="margin-right: 15px;">
                    <!-- Top Cart -->

                    <div class="mini-cart">

                        <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                            <a href="shopping_cart.html"><span class="price">{{ __('Cart') }}</span>
                                <span class="cart_count">2</span></a>
                        </div>
                        <div>
                            <div class="top-cart-content">

                                <!--block-subtitle-->
                                <ul class="mini-products-list" id="cart-sidebar">
                                    <li class="item first">
                                        <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="#l"><img alt="Retis lapen casen" src="products-images/site/product4.jpg"> </a>
                                            <div class="product-details">
                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                <!--access--><strong>1</strong> x <span class="price">$179.99</span>
                                                <p class="product-name"><a href="#">Retis lapen casen...</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item last">
                                        <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"><img alt="Retis lapen casen" src="products-images/site/product3.jpg"> </a>
                                            <div class="product-details">
                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                <!--access--><strong>1</strong> x <span class="price">$80.00</span>
                                                <p class="product-name"><a href="#">Retis lapen casen...</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <!--actions-->
                                <div class="actions">
                                    <button class="btn-checkout" title="Checkout" type="button" onclick="window.location.href='checkout.html'"><span>Checkout</span> </button>
                                    <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top Cart -->

                </div>
                <!-- mgk wishlist -->
                <div class="mgk-wishlist"><a title="My Wishlist" href="wishlist.html"><i class="fa fa-heart"></i><span class="title-wishlist hidden-xs">{{ __('Favorites') }}</span></a></div>
            </div>
        </div>
    </div>
</nav>
<!-- end nav -->
