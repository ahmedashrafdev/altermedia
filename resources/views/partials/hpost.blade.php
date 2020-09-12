<div class="post" style="grid-template-columns: 1fr !important;">

    <figure class="post-img" style="max-width: 100% !important">
        <a title="{{ $hPost->seo }}" href="{{ route('post' , $hPost->slug) }}">
            <img src="{{ $hPost->image }}" alt="{{ $hPost->seo }}">
        </a>
    </figure>
    <div>
       <a class="category" title="{{ $hPost->seo }}" href="{{ route('post' , $hPost->slug) }}">
            <span class="category-label">{{ $hPost->category->name }}</span>
        </a>
        <div class="post-title" style="overflow: hidden; height:30px">
            <a title="{{ $hPost->seo }}" href="{{ route('post' , $hPost->slug) }}">{{ $hPost->title }}</a></h6>
        </div>
        
        <div class="post-meta">
            <ul class="post-meta__list">
                @if($hPost->author->name)
                <li>
                    <span>بواسطة</span>
                    <a href="{{ route('author' , $hPost->author->slug) }}" title="{{ $hPost->seo }}">
                        <span class="author">{{ $hPost->author->name }}</span>
                    </a>
                </li>
                @endif
                {{-- <li><i class="dot">.</i>{{ $hPost->created_at }}</li> --}}
                {{-- <li>
                    <span class="views">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        321 مشاهدات
                    </span>
                </li> --}}
            </ul>
        </div>
            {{-- @if($hPost->small_description)
                <div class="post-description">
                    <p>{{ $hPost->small_description }}</p>
                </div>
            @endif --}}
    </div>
</div>