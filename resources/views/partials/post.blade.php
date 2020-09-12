<div class="post">

    <figure class="post-img mw150">
        <a title="{{ $normalPost->seo }}" href="{{ route('post' , $normalPost->slug) }}">
            <img src="{{ $normalPost->image }}" alt="{{ $normalPost->seo }}">
        </a>
    </figure>
    <div>
       <a class="category" title="{{ $normalPost->seo }}" href="{{ route('post' , $normalPost->slug) }}">
            <span class="category-label">{{ $normalPost->category->name }}</span>
        </a>
        <div class="post-title">
            <a title="{{ $normalPost->seo }}" href="{{ route('post' , $normalPost->slug) }}">{{ $normalPost->title }}</a></h6>
        </div>
        
        <div class="post-meta">
            <ul class="post-meta__list">
                {{-- @if($normalPost->author->name)
                <li>
                    <span>بواسطة</span>
                    <a href="{{ route('author' , $normalPost->author->slug) }}" title="{{ $normalPost->seo }}">
                        <span class="author">{{ $normalPost->author->name }}</span>
                    </a>
                </li>
                @endif
                <li><i class="dot">.</i>{{ $normalPost->created_at }}</li> --}}
                {{-- <li>
                    <span class="views">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        321 مشاهدات
                    </span>
                </li> --}}
            </ul>
        </div>
            @if($normalPost->small_description)
                <div class="post-description">
                    <p>{{ $normalPost->small_description }}</p>
                </div>
            @endif
    </div>
</div>