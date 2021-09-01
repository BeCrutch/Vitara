<!-- Latest Blog hidden-->

<div class="container" >
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="blog-outer-container">
                <div class="block-title">
                    <h2>{{ __('Latest posts') }}</h2>
                </div>
                <div class="blog-inner">

                    @foreach($posts as $post)
                         <div class="col-lg-4 col-md-4 col-sm-4 blog-preview_item">
                            <h4 class="blog-preview_title">
                                <a href="{{ route('site.blog-post', ['slug' => $post->slug]) }}"
                                   style=" white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block;">{{ $post->name }}</a>
                            </h4>
                            <div class="entry-thumb image-hover2">
                                <a href="{{ route('site.blog-post', ['slug' => $post->slug]) }}">
                                    <img alt="Blog" src="http://placehold.it/350x175">
                                </a></div>
                            <div class="blog-preview_info">
                                <ul class="post-meta">
                                    <li><i class="fa fa-clock-o"></i>
                                        {{ $post->created_at->format('d.m.Y') }}
                                    </li>
                                </ul>
                                <div class="blog-preview_desc">{{ $post->meta_description }}</div>
                                <a class="blog-preview_btn" href="{{ route('site.blog-post', ['slug' => $post->slug]) }}">{{ __('Read more') }}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
