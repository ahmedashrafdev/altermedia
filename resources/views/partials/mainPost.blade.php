
<div class="mainPost">
    <figure class="post-img main">
        <a title="{{ $mainPost->seo }}" href="{{ route('post' , $mainPost->slug) }}">
            <img src="{{ $mainPost->image }}" alt="{{ $mainPost->seo }}">
            <a href="/post" class="category-label main"><span>{{ $mainPost->category->name }}</span></a>
        </a>
    </figure>
    <div>
        <div class="post-title main">
            <h6><a href="{{ route('post' , $mainPost->slug) }}" title="{{ $mainPost->seo }}">{{ $mainPost->title }}</a></h6>
        </div>
        <div class="post-meta">
            <ul class="post-meta__list">
                @if($mainPost->author->name)                
                    <li>
                        <span>بواسطة</span>
                        <a href="{{ route('author' , $mainPost->author->slug) }}" title="{{ $mainPost->seo }}">
                            <span class="author">{{ $mainPost->author->name }}</span>
                        </a>
                    </li>
                @endif
                {{-- <li><i class="dot">.</i>{{ $mainPost->created_at }}</li> --}}
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