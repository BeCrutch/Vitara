<div class="item">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info">
                <a class="product-image" title="Retis lapen casen" href="{{ route('site.resource', $product->slug) }}">
                    <img alt="Retis lapen casen" src="https://isw.b2b-sandi.com.ua/imagecache/large/2/2/22021.jpg"></a>
                <!-- Links -->
                <div class="box-hover">
                    <ul class="add-to-links">
                        <li><a class="link-quickview" href="quick_view.html">Quick View</a>
                        </li>
                        <li><a class="link-wishlist" href="wishlist.html">Wishlist</a></li>
                        <li><a class="link-compare" href="compare.html">Compare</a></li>
                    </ul>
                </div>
                <!-- Timer -->
                <div class="box-timer">
                    <div class="countbox_1 timer-grid"></div>
                </div>
            </div>
        </div>

        <div class="item-info">

            <div class="info-inner">

                <div class="item-title">
                    <a title="{{ $product->name }}" href="{{ route('site.resource', $product->slug) }}">{{ $product->name }}</a>
                </div>

                <div class="item-content">

                    <!-- Rating stars -->
                    <div class="rating">
                        <div class="ratings">
                            <div class="rating-box">
                                <div style="width:80%" class="rating"></div>
                            </div>
                            <p class="rating-links">
                                <a href="#">1 Review(s)</a> <span
                                    class="separator">|</span> <a href="#">Add Review</a>
                            </p>
                        </div>
                    </div>
                    <!-- End Rating stars -->
                    @if($product->price)
                        <div class="item-price">
                            <div class="price-box">
                                @if ($product->oldPrice)
                                    <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">{{ number_format(ceil($product->oldPrice),0,'',' ') }} <span>грн.</span></span></p>
                                    <p class="special-price"><span class="price-label">Special Price</span> <span class="price">{{ number_format(ceil($product->price),0,'',' ') }} <span>грн.</span></span></p>
                                @else
                                    <span class="regular-price">
                                        <span class="price">{{ number_format(ceil($product->price),0,'',' ') }} <span>грн.</span></span>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @else
                        <div class="item-price">
                            <div class="price-box">
                                {{ __('No price') }}
                            </div>
                        </div>
                    @endif

                    <div class="action">
                        <button class="button btn-cart" type="button" title=""
                                data-original-title="Add to Cart"><span>{{ __('Add to cart')}}</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
