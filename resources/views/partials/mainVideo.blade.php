<div class="mainvideo video">
    <div class="overlay"></div>
    <a href="/" class="mainvideo__img" title="{{$mainVideo->seo}}">
        <img src="{{$mainVideo->image}}" alt="{{$mainVideo->seo}}">
        <div class="video-play"></div>
    </a>
    <div class="mainvideo__content">
        <div class="post-title">
            <h6><a href="/" title="{{$mainVideo->seo}}">{{$mainVideo->name}}</a></h6>
        </div>
        <div class="post-meta">
            <ul class="post-meta__list">
                {{-- @if($mainVideo->author->name)
                <li>
                    <span>بواسطة</span>
                    <a href="{{ route('author' , $normalPost->author->slug) }}" title="{{ $normalPost->seo }}">
                        <span class="author">{{$mainVideo->author->name}}</span>
                    </a>
                </li>
                @endif --}}
                {{-- <li><i class="dot">.</i>{{$mainVideo->created_at}}</li> --}}
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