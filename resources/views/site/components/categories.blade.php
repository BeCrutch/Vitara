@php($categories = $categories ?? \App\Category::joinLocalization()->where('details->published', 1)->where('details->is_menu_item', 1)->get()->toTree())
<div class="mega-menu-category">
    <ul class="nav">
        @foreach($categories as $category)
            <li>
                <a href="{{ route('site.resource', $category->slug) }}">
                    <i class="fa fa-file-text"></i> {!! $category->getData('name') !!}
                </a>
                <div class="wrap-popup column1">
                    <div class="popup">
                        <ul class="nav">
                            @foreach($category->children as $cat)
                                <li>
                                    <a href="{{ route('site.resource', $cat->slug) }}">{!! $cat->getData('name') !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
