<!-- Footer -->
<footer class="footer">

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

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2021 All Rights Reserved.</div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
