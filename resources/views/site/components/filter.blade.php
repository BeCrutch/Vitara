<aside class="col-left sidebar">

    <form class="cell-md-3 section-divided__aside section__aside-left" action="">

    <!-- Range-->
    @if ($minPrice != $maxPrice)
        <div class="side-nav-categories">
            <div class="block-title">{{ __('Price') }}</div>
            <!--RD Range-->
            <div class="rd-range-wrap">
                <div class="rd-range-inner">
                    <input class="rd-range-input-value-1" name="minPrice">
                    <input class="rd-range-input-value-2" name="maxPrice">
                    <button class="rd-range-input-btn" type="submit">OK</button>
                </div>
                <div class="rd-range" data-min="{{ $minPrice }}" data-max="{{ $maxPrice }}" data-start="[{{ $minPriceSelect }}, {{ $maxPriceSelect }}]" data-step="1"
                     data-tooltip="true" data-min-diff="10" data-input=".rd-range-input-value-1"
                     data-input-2=".rd-range-input-value-2"></div>
            </div>
        </div>
    @endif

    @foreach ($characteristics as $characteristic)
        @if(count($valuesForView[$characteristic->id]) > 1)
            <div class="block block-poll">
                <div class="block-title">{{ $characteristic->getData('name') }}</div>
                <ul id="poll-answers">
                    @foreach ($valuesForView[$characteristic->id] as $value)
                        <li>
                            <div class="form-group form-check custom-checkbox">
                                <input
                                    type="checkbox"
                                    class="custom-control-input checkbox-custom"
                                    name=filter[{{ $characteristic->id }}][]
                                    id="valueID{{ $value->id }}"
                                    value="{{ $value->id }}" {{ in_array($value->id, ($_GET['filter'][$characteristic->id]) ?? []) ? 'checked' : ''}}
                                >
                                <span class="checkbox-custom-dummy"></span>
                                <label class="custom-control-label"
                                       for="valueID{{ $value->id }}">{{ $value->getData('value') }}
                                    {{--<span>(1)</span>--}}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endforeach



{{--        <div class="side-nav-categories">--}}
{{--            <div class="block-title"> Categories </div>--}}
{{--            <!--block-title-->--}}
{{--            <!-- BEGIN BOX-CATEGORY -->--}}
{{--            <div class="box-content box-category">--}}
{{--                <ul>--}}
{{--                    <li> <a class="active" href="grid.html">Women</a> <span class="subDropdown minus"></span>--}}
{{--                        <ul class="level0_415" style="display:block">--}}
{{--                            <li> <a href="grid.html"> Tops </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Evening Tops </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Shirts &amp; Blouses </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Tunics </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Vests </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Bags </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Bags </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Designer Handbags </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Purses </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Shoulder Bags </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Shoes </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Flat Shoes </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Flat Sandals </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Boots </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Heels </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Jewellery </a>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Bracelets </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Necklaces &amp; Pendants </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Pins &amp; Brooches </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Dresses </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Casual Dresses </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Evening </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Designer </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Party </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Lingerie </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Bras </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Bodies </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Lingerie Sets </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Shapewear </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Jackets </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Coats </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Jackets </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Leather Jackets </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Blazers </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Swimwear </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Swimsuits </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Beach Clothing </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Bikinis </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                        </ul>--}}
{{--                        <!--level0-->--}}
{{--                    </li>--}}
{{--                    <!--level 0-->--}}
{{--                    <li> <a href="grid.html">Men</a> <span class="subDropdown plus"></span>--}}
{{--                        <ul class="level0_455" style="display:none">--}}
{{--                            <li> <a href="grid.html"> Shoes </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Flat Shoes </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Boots </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Heels </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Jewellery </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Bracelets </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Necklaces &amp; Pendants </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Pins &amp; Brooches </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Dresses </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Casual Dresses </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Evening </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Designer </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Party </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Jackets </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Coats </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Jackets </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Leather Jackets </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Blazers </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Swimwear </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Swimsuits </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Beach Clothing </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                        </ul>--}}
{{--                        <!--level0-->--}}
{{--                    </li>--}}
{{--                    <!--level 0-->--}}
{{--                    <li> <a href="grid.html">Electronics</a> <span class="subDropdown plus"></span>--}}
{{--                        <ul class="level0_482" style="display:none">--}}
{{--                            <li> <a href="grid.html"> Smartphones </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Samsung </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Apple </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Blackberry </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Nokia </a> </li>--}}
{{--                                    <li> <a href="grid.html"> HTC </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Cameras </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> Digital Cameras </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Camcorders </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Lenses </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Filters </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Tripod </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                            <li> <a href="grid.html"> Accesories </a> <span class="subDropdown plus"></span>--}}
{{--                                <ul class="level1" style="display:none">--}}
{{--                                    <li> <a href="grid.html"> HeadSets </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Batteries </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Screen Protectors </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Memory Cards </a> </li>--}}
{{--                                    <li> <a href="grid.html"> Cases </a> </li>--}}
{{--                                    <!--end for-each -->--}}
{{--                                </ul>--}}
{{--                                <!--level1-->--}}
{{--                            </li>--}}
{{--                            <!--level1-->--}}
{{--                        </ul>--}}
{{--                        <!--level0-->--}}
{{--                    </li>--}}
{{--                    <!--level 0-->--}}
{{--                    <li> <a href="grid.html">Digital</a> </li>--}}
{{--                    <!--level 0-->--}}
{{--                    <li class="last"> <a href="grid.html">Fashion</a> </li>--}}
{{--                    <!--level 0-->--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!--box-content box-category-->--}}
{{--        </div>--}}
{{--        <div class="block block-layered-nav">--}}
{{--            <div class="block-title">Shop By</div>--}}
{{--            <div class="block-content">--}}
{{--                <p class="block-subtitle">Shopping Options</p>--}}
{{--                <dl id="narrow-by-list">--}}
{{--                    <dt class="odd">Price</dt>--}}
{{--                    <dd class="odd">--}}
{{--                        <ol>--}}
{{--                            <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>--}}
{{--                            <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>--}}
{{--                        </ol>--}}
{{--                    </dd>--}}
{{--                    <dt class="even">Manufacturer</dt>--}}
{{--                    <dd class="even">--}}
{{--                        <ol>--}}
{{--                            <li> <a href="#">TheBrand</a> (9) </li>--}}
{{--                            <li> <a href="#">Company</a> (4) </li>--}}
{{--                            <li> <a href="#">LogoFashion</a> (1) </li>--}}
{{--                        </ol>--}}
{{--                    </dd>--}}
{{--                    <dt class="odd">Color</dt>--}}
{{--                    <dd class="odd">--}}
{{--                        <ol>--}}
{{--                            <li> <a href="#">Green</a> (1) </li>--}}
{{--                            <li> <a href="#">White</a> (5) </li>--}}
{{--                            <li> <a href="#">Black</a> (5) </li>--}}
{{--                            <li> <a href="#">Gray</a> (4) </li>--}}
{{--                            <li> <a href="#">Dark Gray</a> (3) </li>--}}
{{--                            <li> <a href="#">Blue</a> (1) </li>--}}
{{--                        </ol>--}}
{{--                    </dd>--}}
{{--                    <dt class="last even">Size</dt>--}}
{{--                    <dd class="last even">--}}
{{--                        <ol>--}}
{{--                            <li> <a href="#">S</a> (6) </li>--}}
{{--                            <li> <a href="#">M</a> (6) </li>--}}
{{--                            <li> <a href="#">L</a> (4) </li>--}}
{{--                            <li> <a href="#">XL</a> (4) </li>--}}
{{--                        </ol>--}}
{{--                    </dd>--}}
{{--                </dl>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="block block-cart">--}}
{{--            <div class="block-title ">My Cart</div>--}}
{{--            <div class="block-content">--}}
{{--                <div class="summary">--}}
{{--                    <p class="amount">There are <a href="shopping_cart.html">2 items</a> in your cart.</p>--}}
{{--                    <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$27.99</span> </p>--}}
{{--                </div>--}}
{{--                <div class="ajax-checkout">--}}
{{--                    <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>--}}
{{--                </div>--}}
{{--                <p class="block-subtitle">Recently added item(s) </p>--}}
{{--                <ul>--}}
{{--                    <li class="item"> <a href="shopping_cart.html" title="Fisher-Price Bubble Mower" class="product-image"><img src="products-images/product10.jpg" alt="Fisher-Price Bubble Mower"></a>--}}
{{--                        <div class="product-details">--}}
{{--                            <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>--}}
{{--                            <strong>1</strong> x <span class="price">$19.99</span>--}}
{{--                            <p class="product-name"> <a href="shopping_cart.html">Skater Dress In Leaf Print Grouped Product</a> </p>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="item last"> <a href="shopping_cart.html" title="Prince Lionheart Jumbo Toy Hammock" class="product-image"><img src="products-images/product1.jpg" alt="Prince Lionheart Jumbo Toy Hammock"></a>--}}
{{--                        <div class="product-details">--}}
{{--                            <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>--}}
{{--                            <strong>1</strong> x <span class="price">$8.00</span>--}}
{{--                            <p class="product-name"> <a href="shopping_cart.html"> Sample Fashion Product Prince Lionheart </a> </p>--}}

{{--                            <!--access clearfix-->--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="block block-compare">--}}
{{--            <div class="block-title ">Compare Products (2)</div>--}}
{{--            <div class="block-content">--}}
{{--                <ol id="compare-items">--}}
{{--                    <li class="item odd">--}}
{{--                        <input type="hidden" value="2173" class="compare-item-id">--}}
{{--                        <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Polyester Wrapped Cushions</a> </li>--}}
{{--                    <li class="item last even">--}}
{{--                        <input type="hidden" value="2174" class="compare-item-id">--}}
{{--                        <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a> </li>--}}
{{--                </ol>--}}
{{--                <div class="ajax-checkout">--}}
{{--                    <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>--}}
{{--                    <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="custom-slider">--}}
{{--            <div>--}}
{{--                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
{{--                    <ol class="carousel-indicators">--}}
{{--                        <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>--}}
{{--                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>--}}
{{--                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>--}}
{{--                    </ol>--}}
{{--                    <div class="carousel-inner">--}}
{{--                        <div class="item active"><img src="images/slide3.jpg" alt="slide3">--}}
{{--                            <div class="carousel-caption">--}}
{{--                                <h3><a title=" Sample Product" href="#">50% OFF</a></h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                                <a class="link" href="#">Buy Now</a></div>--}}
{{--                        </div>--}}
{{--                        <div class="item"><img src="images/slide1.jpg" alt="slide1">--}}
{{--                            <div class="carousel-caption">--}}
{{--                                <h3><a title=" Sample Product" href="#">Hot collection</a></h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item"><img src="images/slide2.jpg" alt="slide2">--}}
{{--                            <div class="carousel-caption">--}}
{{--                                <h3><a title=" Sample Product" href="#">Summer collection</a></h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span> </a></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="block block-list block-viewed">--}}
{{--            <div class="block-title"> Recently Viewed </div>--}}
{{--            <div class="block-content">--}}
{{--                <ol id="recently-viewed-items">--}}
{{--                    <li class="item odd">--}}
{{--                        <p class="product-name"><a href="#"> Armchair with Box-Edge Upholstered Arm</a></p>--}}
{{--                    </li>--}}
{{--                    <li class="item even">--}}
{{--                        <p class="product-name"><a href="#"> Pearce Upholstered Slee pere</a></p>--}}
{{--                    </li>--}}
{{--                    <li class="item last odd">--}}
{{--                        <p class="product-name"><a href="#"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a></p>--}}
{{--                    </li>--}}
{{--                </ol>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="block block-poll">--}}
{{--            <div class="block-title">Community Poll </div>--}}
{{--            <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">--}}
{{--                <div class="block-content">--}}
{{--                    <p class="block-subtitle">What is your favorite Magento feature?</p>--}}
{{--                    <ul id="poll-answers">--}}
{{--                        <li class="odd">--}}
{{--                            <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">--}}
{{--                            <span class="label">--}}
{{--                      <label for="vote_5">Layered Navigation</label>--}}
{{--                      </span> </li>--}}
{{--                        <li class="even">--}}
{{--                            <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">--}}
{{--                            <span class="label">--}}
{{--                      <label for="vote_6">Price Rules</label>--}}
{{--                      </span> </li>--}}
{{--                        <li class="odd">--}}
{{--                            <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">--}}
{{--                            <span class="label">--}}
{{--                      <label for="vote_7">Category Management</label>--}}
{{--                      </span> </li>--}}
{{--                        <li class="last even">--}}
{{--                            <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">--}}
{{--                            <span class="label">--}}
{{--                      <label for="vote_8">Compare Products</label>--}}
{{--                      </span> </li>--}}
{{--                    </ul>--}}
{{--                    <div class="actions">--}}
{{--                        <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="hot-banner"><img alt="banner" src="images/hot-trends-banner.jpg"></div>--}}
{{--        <div class="block block-tags">--}}
{{--            <div class="block-title"> Popular Tags</div>--}}
{{--            <div class="block-content">--}}
{{--                <ul class="tags-list">--}}
{{--                    <li><a href="#" style="font-size:98.3333333333%;">Camera</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">Hohoho</a></li>--}}
{{--                    <li><a href="#" style="font-size:145%;">SEXY</a></li>--}}
{{--                    <li><a href="#" style="font-size:75%;">Tag</a></li>--}}
{{--                    <li><a href="#" style="font-size:110%;">Test</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">bones</a></li>--}}
{{--                    <li><a href="#" style="font-size:110%;">cool</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">cool t-shirt</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">crap</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">good</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">green</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">hip</a></li>--}}
{{--                    <li><a href="#" style="font-size:75%;">laptop</a></li>--}}
{{--                    <li><a href="#" style="font-size:75%;">mobile</a></li>--}}
{{--                    <li><a href="#" style="font-size:75%;">nice</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">phone</a></li>--}}
{{--                    <li><a href="#" style="font-size:98.3333333333%;">red</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">tight</a></li>--}}
{{--                    <li><a href="#" style="font-size:75%;">trendy</a></li>--}}
{{--                    <li><a href="#" style="font-size:86.6666666667%;">young</a></li>--}}
{{--                </ul>--}}
{{--                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    <button class="button button-gray-light-outline" href="#">{{ __('Apply') }}</button>

</form>

</aside>
