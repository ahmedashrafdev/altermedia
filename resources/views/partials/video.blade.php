<div class="video">
        <figure class="post-img mw100 mh100">
            <a href="/" title="{{$video->seo}}">
                 <img src="{{$video->image}}" alt="{{$video->seo}}">
                <div class="video-play"></div>
            </a>
        </figure>
        <div>
            <div class="post-title">
                <h6><a href="/" title="{{$video->seo}}">{{$video->name}}</a></h6>
            </div>
            <div class="post-meta">
                <ul class="post-meta__list">
                    {{-- @if($video->author->name)
                    <li>
                        <span>بواسطة</span>
                        <a href="/">
                            <span class="author">{{$video->author->name}}</span>
                        </a>
                    </li>
                    @endif --}}
                </ul>
            </div>
        </div>
    </div>