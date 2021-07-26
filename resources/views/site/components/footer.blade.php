<!-- Page Footer -->
{{--<section class="pre-footer-corporate">--}}

{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-sm-6 col-md-10 col-lg-3">--}}
{{--                <img src="{{ asset('images/site/logo.svg') }}" alt="" width="125">--}}
{{--                <p style="padding-top: 35px;font-size: 14px">{!! __('footer desc') !!}</p>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-md-3 col-lg-3">--}}
{{--                <h5>{{ __('Categories') }}</h5>--}}
{{--                <ul class="list-sm">--}}
{{--                    @php($categories = $categories ?? \App\Category::joinLocalization()->get()->toTree())--}}

{{--                    @foreach($categories as $category)--}}
{{--                        <li>--}}
{{--                            <a href="{{ route('site.resource', $category->slug) }}">{!! $category->getData('name') !!}</a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-md-5 col-lg-3">--}}
{{--                <h5>{{ __('Information') }}</h5>--}}
{{--                <ul class="list-sm">--}}
{{--                    --}}{{--<li><a href="/for-user">{{ __('For user') }}</a></li>--}}
{{--                    <li><a href="{{ route('site.sitemap') }}">{{ __('Sitemap') }}</a></li>--}}
{{--                    <li><a href="{{ route('site.blog') }}">{{ __('Blog') }}</a></li>--}}
{{--                    <li><a href="{{ route('site.contacts') }}">{{ __('Contacts') }}</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-md-4 col-lg-3">--}}
{{--                <h5>{{ __('About us') }}</h5>--}}
{{--                <ul class="list-sm">--}}
{{--                    <li><a href="{{ route('site.resource', 'about-us') }}">{{ __('About brand') }}</a></li>--}}
{{--                    <li><a href="{{ route('site.documentations') }}">{{ __('Documentation') }}</a></li>--}}
{{--                    <li><p style="font-size: 20px; color: #000">{{ __('Get in Touch') }}</p></li>--}}
{{--                    <li><a style="font-size: 20px; color: #000" href="tel:0800212008">0800 210 377</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--</section>--}}
{{--<!-- Footer -->--}}
{{--<footer class="footer-corporate" style="border-top: 1px solid #888; background-color: #f8f8f8; color: #000;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="footer-corporate__inner">--}}
{{--                <p class="rights">©&nbsp;{{ date('Y') }} LIDZ. {{ __('copy') }}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}

<!-- Footer -->
<footer class="footer">
    <div class="newsletter-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="newsletter">
{{--                        <form>--}}
{{--                            <div>--}}
{{--                                <h4><span>newsletter</span></h4>--}}
{{--                                <input type="text" placeholder="Enter your email address" class="input-text" title="Sign up for our newsletter" id="newsletter1" name="email">--}}
{{--                                <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--newsletter-->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6"></div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>{{ __('Categories') }}</h4>
                        @php($categories = $categories ?? \App\Category::joinLocalization()->get()->toTree())
                        <ul class="links">
                            @foreach($categories as $category)
                                <li><a href="{{ route('site.resource', $category->slug) }}" title="{!! $category->getData('name') !!}">{!! $category->getData('name') !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-column pull-left">
                        <h4>{{ __('Information') }}</h4>
                        <ul class="links">
                            <li><a href="{{ route('site.sitemap') }}" title="{{ __('Sitemap') }}">{{ __('Sitemap') }}</a></li>
                            <li><a href="{{ route('site.blog') }}" title="{{ __('Blog') }}">{{ __('Blog') }}</a></li>
                            <li><a href="{{ route('site.contacts') }}" title="{{ __('Contacts') }}">{{ __('Contacts') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>{{ __('About us') }}</h4>
                    <div class="contacts-info">
                        <address>
                            <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
                            &nbsp;CA 12345 USA
                        </address>
                        <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
                        <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@example.com">support@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="social">
                        <ul>
                            <li class="fb"><a href="#"></a></li>
                            <li class="tw"><a href="#"></a></li>
                            <li class="googleplus"><a href="#"></a></li>
                            <li class="rss"><a href="#"></a></li>
                            <li class="pintrest"><a href="#"></a></li>
                            <li class="linkedin"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="payment-accept"><img src="images/payment-1.png" alt="PayPal"> <img
                            src="images/payment-2.png" alt="VISA"> <img src="images/payment-3.png"
                                                                        alt="American Express"> <img
                            src="images/payment-4.png" alt="Mastercard"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2018 Magikcommerce. All Rights Reserved.</div>
                <div class="col-sm-7 col-xs-12 company-links">
                    <ul class="links">
                        <li><a href="#" title="Gift Subscriptions">Gift Subscriptions</a></li>
                        <li><a href="#" title="Advertise Products">Advertise Products</a></li>
                        <li><a href="#" title="Terms & Conditions">Terms & Conditions</a></li>
                        <li class="last"><a href="#" title="Privacy Policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
