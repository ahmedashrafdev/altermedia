<div class="toppost">
    <div class="overlay"></div>
    <a  class="toppost__img" title="{{ $topPost->seo }}" href="{{ route('post' , $topPost->slug) }}">
        <img src="{{ $topPost->image }}" alt="{{ $topPost->seo }}">
    </a>
    <div class="toppost__content">
        <div class="category">
            <a title="{{ $topPost->seo }}" href="{{ route('post' , $topPost->slug) }}">
                <span class="category-label">
                    {{ $topPost->category->name }}
                </span>
            </a>
        </div>
        <div class="post-title">
            <a title="{{ $topPost->seo }}" href="{{ route('post' , $topPost->slug) }}">{{ $topPost->title }}</a></h6>
        </div>
        <div class="post-meta">
            <ul class="post-meta__list">
                {{-- @if($topPost->author->name)                
                <li>
                    <span>بواسطة</span>
                    <a href="{{ route('author' , $topPost->author->slug) }}" title="{{ $topPost->seo }}">
                        <span class="author">{{ $topPost->author->name }}</span>
                    </a>
                </li>
                @endif --}}
                {{-- <li><i class="dot">.</i> {{ $topPost->created_at }}</li> --}}
                {{-- <li>
                    <span class="views">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        321 مشاهدات
                    </span>
                </li> --}}
            </ul>
        </div>
    </div>
</div>