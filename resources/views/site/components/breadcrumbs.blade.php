<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="/" itemprop="item" title="Go to Home Page">{{ __('Home') }}</a> <span>/</span>
                        <meta itemprop="position" content="1" />
                    </li>
                    @yield('breadcrumbs')
                </ul>
            </div>
        </div>
    </div>
</div>
